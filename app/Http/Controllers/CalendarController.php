<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Appointment;
use App\AppointmentStatus;
use App\AppointmentType;
use App\CustomReport;
use App\ClinicDentalPlan;
use App\Image;
use App\Patient;
use App\Procedure;
use App\Role;
use App\Specialty;
use App\User;
use App\UserHoliday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        // if dentist admin or receptionist is present there
        if (Auth::user()->hasRole('receptionist')) {
            $dentists = Role::where('name', 'dentist')->first()->users()->get();

            if (isset($dentists[0]->user_id))
                return redirect()->action('CalendarController@show', ['id' => $dentists[0]->user_id]);

            echo "Não existe nenhum usuário cadastrado tente cadastrar um.";

        } elseif (Auth::user()->hasRole('Local Admin')) {

            if (isset(Auth::user()->id))
                return redirect()->action('CalendarController@show', ['id' => Auth::user()->id]);

            echo "Não existe nenhum usuário cadastrado tente cadastrar um.";
        }
        return $this->userAppointments($id);
    }

    public function userAppointments($id)
    {
        $title = "Appointment";
        $subtitle = "Book an Appointment";
        $activeClass = "appointments";

        $user = User::find($id);
        $types = AppointmentType::pluck('name', 'id');
        $treatmentTypes = Specialty::pluck('name', 'id'); //TreatmentType::pluck('title', 'id');
        $treatments = Specialty::pluck('name', 'id')->toJson(); //TreatmentType::pluck('price', 'id')->toJson();
        $treatmentTypesWithPrice = Specialty::all(); // TreatmentType::all();
        $dentalPlans = ClinicDentalPlan::pluck('title', 'id');
        $appointments = Appointment::where('user_id', $id)->where('clinic_id', $user->clinic_id)->with(['patient', 'status'])->get();
        $report_models = CustomReport::pluck('name', 'id');
        $specialties = Specialty::orderBy('name')->pluck('name', 'id');
        $appointment_statuses = AppointmentStatus::pluck('name', 'id');

        $calendarArray = array();
        if (!empty($appointments)) {
            foreach ($appointments as $data) {
                $data->title = $data->patient->first_name . " " . $data->patient->last_name;

                $data->phone_landline = $data->patient->phone_landline;
                $data->phone_1 = $data->patient->phone_1;
                $data->patient_observation = $data->patient->observation;
                $data->date_of_birth = $data->patient->date_of_birth;

                foreach ($data->patient->appointments as $v) {
                    $dentist = User::where('id', $v->dentist_id)->select('first_name', 'last_name')->first();
                    $v->dentist = $dentist;
                }

                if ($data->created_by != '') {
                    $use = User::find($data->created_by);
                    if ($use->hasRole('receptionist')) {
                        $data->booked_by = 'receptionist';
                    } else {
                        $data->booked_by = 'dentist';
                    }
                } else {
                    $data->booked_by = 'dentist';
                }
                array_push($calendarArray, $data);
            }
        }

        // get holidays
        $holidays = UserHoliday::where('user_id', $id)->get();
        foreach ($holidays as $data) {
            $hol = new $data;
            $hol->title = "Holiday";
            $hol->start = $data->start_date;
            $hol->end = $data->end_date;
            $hol->className = "holiday_event";
            array_push($calendarArray, $hol);
        }
        $calendarArray = json_encode($calendarArray);

        // agenda settings
        $agendaSettings = Agenda::where('user_id', $user->id)->first();
        if ($agendaSettings) {
            $agendaSettings = json_decode($agendaSettings['settings']);
        }

        // getting current clinic dentists
        $dentist = Role::where('name', 'dentist')->first()->users()->where('clinic_id', $user->clinic_id)->get();

        //$dentist = Role::with('users')->where('name', 'dentist')->orWhere('name', 'local_admin')->get();

        foreach ($dentist as $d) {
            $name = $d->first_name . " " . $d->last_name;
            $d->name = $name;
        }
        $professionals = $dentist->pluck('name', 'id');

        $dentist_id = $user->id;

        return view('calendar', compact('title', 'subtitle', 'activeClass', 'types', 'treatmentTypes', 'dentalPlans',
            'calendarArray', 'professionals', 'dentist_id', 'treatmentTypesWithPrice', 'report_models', 'treatments', 'agendaSettings', 'specialties',
            'holidays', 'appointment_statuses', 'user'));
    }

    public function store(Request $request)
    {
        $request['clinic_id'] = Auth::user()->clinic_id;
        $appointment = Appointment::create($request->except('patient', 'patient_telephone', 'patient_mobile', 'patient_observation'));
        return response()->json(['status' => 'success', 'message' => 'Agendado com sucesso!', 'id' => $appointment->id]);
    }

    public function show($id)
    {
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasRole('local_admin') || $user->hasRole('receptionist'))
            return $this->userAppointments($id);
        else
            return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request['clinic_id'] = Auth::user()->clinic_id;
        Appointment::find($id)->update($request->except('patient', 'patient_telephone', 'patient_mobile', 'patient_observation'));
        return response()->json(['status' => 'success', 'message' => 'Agendamento atualizado com sucesso!']);
    }

    public function updateStatus(Request $request, $id)
    {
        $status = AppointmentStatus::find($request->status);
        Appointment::find($id)->update(['appointment_status_id' => $status->id, 'className' => $status->class_name]);
        return response()->json(['status' => 'success', 'message' => 'Agendamento atualizado com sucesso!']);
    }

    public function destroy($id)
    {
        Appointment::destroy($id);
        return "success";
    }

    /**
     * APPOINTMENT TYPES
     */
    public function appointmentTypes()
    {
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasPermission('appointments.types')) {
            $title = "Appointment Type";
            $subtitle = "Appointment Types List";
            $activeClass = "appointments";

            $types = AppointmentType::all();

            return view('appointments.types', compact('title', 'subtitle', 'activeClass', 'types'));
        } else {
            //# code...
            abort(404, 'Unauthorized action.');
        }
    }

    public function addAppointmentTypes(Request $request)
    {
        AppointmentType::create($request->all());
        return "success";
    }


    /**
     * GET GIVEN DATE APPOINTMENTS OF DENTIST
     */
    public function getTodaysEvent(Request $request)
    {
        $count = Appointment::where([['startdate', $request->date], ['user_id', $request->dentist_id]])->count();
        $appointments = Appointment::where([['startdate', $request->date], ['user_id', $request->dentist_id]])->orderBy('starttimestamp', 'asc')->get();

        if ($count <= 0)
            return response()->json(['status' => 'error', 'message' => 'Nenhum agendamento encontrado para essa data!']);

        $i = 0;
        foreach ($appointments as $data) {
            $patient = Patient::find($data->patient_id);
            $appointments[$i]->patient = $patient;
            $appointments[$i]->patient->contact = $patient->contact;
            $i++;
        }

        return response()->json(['status' => 'success', 'message' => $appointments]);
    }

    /**
     * ADDING DOCUMENT
     */
    public function addDocument(Request $request)
    {
        $input = $request->all();

        $appointment_id = $request->appointment_id;
        if ($appointment_id == '')
            return response()->json(['status' => 'error', 'message' => "Ocorreu um erro! Tente recarregar a pagina."]);

        $appointment = Appointment::find($appointment_id);
        if (isset($appointment->id)) {
            $patient_id = $appointment->patient_id;
            $dentist_id = $appointment->dentist_id;

            $patient = Patient::find($patient_id);

            if (!file_exists('uploads/' . $patient->clinic_id)) {
                mkdir('uploads/' . $patient->clinic_id, 0755, true);
            }
            if (!file_exists('uploads/' . $patient->clinic_id . "/patients/treatments/" . $appointment_id)) {
                mkdir('uploads/' . $patient->clinic_id . "/patients/treatments/" . $appointment_id, 0755, true);
            }
            $url = $this->upload($input['upload_document'], $patient->clinic_id . "/patients/treatments/" . $appointment_id);

            $image = Image::create([
                'url' => $url,
                'patient_id' => $patient->id,
                'appointment_id' => $appointment_id
            ]);
            if ($image->id) {
                $gettingDocuments = $this->getPatientTreatmentDocuments($request);
                return response()->json(['status' => 'success', 'message' => $gettingDocuments]);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro!']);
            }
        }
    }

    /**
     * DELETING
     */
    public function deleteDocument($id)
    {
        $document = Image::find($id);
        if ($document->id) {
            unlink($document->url);
            $document->delete();
            return response()->json(['status' => 'success', 'message' => "Excluído."]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Ocorreu um erro!"]);
        }
    }

    public function upload($file, $id)
    {
        // getting all of the post data
        $destinationPath = 'uploads/' . $id; // upload path
        if (!file_exists('uploads/' . $id)) {
            mkdir('uploads/' . $id, 0755, true);
        }
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $file->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
        return 'uploads/' . $id . "/" . $fileName;
    }

    public function getPatientTreatmentDocuments(Request $request)
    {
        $id = $request->appointment_id;
        $documents = Image::where('appointment_id', '=', $id)->get();
        return $documents;
    }

    /**
     * ADDING QUOTATION
     */
    /*public function addQuotation(Request $request)
    {
        $count = PatientQuotation::where('appointment_id', '=', $request->appointment_id)->count();
        if ($count > 0) {
            $quotation = PatientQuotation::where('appointment_id', '=', $request->appointment_id)->first();
            if ($quotation->id) {
                $quotation->content = $request->content;
                $quotation->save();
                return response()->json(['status' => 'success', 'message' => "Quotation Updated!"]);
            }
        } else {
            $quotation = PatientQuotation::create([
                'content' => $request->content,
                'appointment_id' => $request->appointment_id,
                'patient_id' => $request->patient_id,
            ]);
            if ($quotation->id) {
                return response()->json(['status' => 'success', 'message' => "Quotation Added!"]);
            }
        }
    }*/

    /**
     * GETTING QUOTATION
     */
    /*   public function getQuotation(Request $request)
       {
           $treatment = Treatment::where('appointment_id', '=', $request->id)->get();
           $count = Treatment::where('appointment_id', '=', $request->id)->count();
           if ($count > 0) {

               // processing quotation
               $i = 0;
               foreach ($treatment as $data) {
                   $payment = Payment::find($data->payment_id);
                   $treatment[$i]->payment_type = $payment->payment_type;
                   $treatment[$i]->payment_status = $payment->payment_type;
                   $i++;
               }


               return response()->json(['status' => 'success', 'message' => $treatment]);
           } else {
               return response()->json(['status' => 'success', 'message' => "No Quotations For now!"]);
           }
       }*/

    /**
     * SUMMARY
     *
     * GETTING ALL DATA FROM THE appointment
     */
    public function summary(Request $request)
    {
        $id = $request->appointment_id;
        $appointment = Appointment::find($id);
        if (!$appointment->id)
            return response()->json(['status' => 'success', 'message' => "No Quotations For now!"]);

        $appointment->treatments = Procedure::where([['patient_id', $appointment->patient_id], ['appointment_id', $request->appointment_id]])->get();
        $appointment->documents = Image::where('appointment_id', $appointment->id)->get();

        $i = 0;
        foreach ($appointment->treatments as $data) {
            $appointment->treatments[$i]->amount = $data->payment->amount;
            $appointment->treatments[$i]->status = $data->payment->status;
            if ($data->payment->payment_type == '0') {
                $appointment->treatments[$i]->payment_type = "Cash";
            }
            if ($data->payment->payment_type == '1') {
                $appointment->treatments[$i]->payment_type = "Credit";
            }
            if ($data->payment->status == '0') {
                $appointment->treatments[$i]->status = "Not Paid";
            }
            if ($data->payment->status == '1') {
                $appointment->treatments[$i]->status = "Paid";
            }
            $appointment->treatments[$i]->dentist_name = $data->dentist->name;
            $appointment->treatments[$i]->treatment_title = $data->treatmentType->title;
            $i++;
        }

        return response()->json(['status' => 'success', 'message' => $appointment]);
    }

    public function appointmentdetails($id)
    {
        return Appointment::find($id)->first();
    }

}
