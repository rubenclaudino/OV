<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\AppointmentType;
use App\CustomReport;
use App\DentalPlan;
use App\Patient;
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
        if (Auth::user()->hasRole('Receptionist')) {
            $dentists = Role::where('name', 'Dentist')->first()->users()->get();

            if (isset($dentists[0]->user_id))
                return redirect()->action('CalendarController@show', ['id' => $dentists[0]->user_id]);

            echo "No Dentist Found! You Need to create at least one Dentist.";

        } elseif (Auth::user()->hasRole('Local Admin')) {

            if (isset(Auth::user()->id))
                return redirect()->action('CalendarController@show', ['id' => Auth::user()->id]);

            echo "No Dentist Found! You Need to create at least one Dentist.";
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
        $dentalPlans = DentalPlan::pluck('name', 'id');
        $treatments = Specialty::pluck('name', 'id')->toJson(); //TreatmentType::pluck('price', 'id')->toJson();
        $appointments = Appointment::where('user_id', $id)->where('clinic_id', $user->clinic_id)->get();
        $treatmentTypesWithPrice = Specialty::all(); // TreatmentType::all();
        $report_models = CustomReport::pluck('name', 'id');
        $specialities = Specialty::pluck('name', 'id');


        $calendarArray = array();
        if (!empty($appointments)) {
            foreach ($appointments as $data) {
                $tempArray = new \stdClass();

                if ($data->status == '1') {
                    $className = "appointment-status-booked";
                }
                if ($data->status == '2') {
                    $className = "appointment-status-confirmed";
                }
                if ($data->status == '3') {
                    $className = "appointment-status-cancelled";
                }
                if ($data->status == '4') {
                    $className = "appointment-status-missed";
                }
                if ($data->status == '5') {
                    $className = "appointment-status-finished";
                }

                $allDay = false;

                $tempArray->id = $data->id;
                $tempArray->title = $data->patient->first_name . " " . $data->patient->last_name;
                //$tempArray->dentist_id = $data->dentist_id;
                $tempArray->patient_id = $data->patient->id;

                $tempArray->patient_telephone = $data->patient->contact->phone_landline;
                $tempArray->patient_mobile = $data->patient->contact->celular_1;
                $tempArray->patient_observation = $data->patient->patient_observation;
                $tempArray->dob = $data->patient->DOB;

                $i = 0;
                foreach ($data->patient->appointments as $v) {
                    $dentist = Dentist::where('user_id', $v->dentist_id)->select('first_name', 'last_name')->first();

                    $data->patient->appointments[$i]->dentist = $dentist;
                    if ($data->patient->appointments[$i]->status == '1') {
                        $s = "Booked";
                    }
                    if ($data->patient->appointments[$i]->status == '2') {
                        $s = "Confirmed";
                    }
                    if ($data->patient->appointments[$i]->status == '3') {
                        $s = "Cancelled";
                    }
                    if ($data->patient->appointments[$i]->status == '4') {
                        $s = "Missed";
                    }
                    if ($data->patient->appointments[$i]->status == '5') {
                        $s = "Finished";
                    }
                    $data->patient->appointments[$i]->status = $s;

                    $i++;
                }
                $tempArray->patient = new \StdClass;
                $tempArray->patient->id = $data->patient->id;
                $tempArray->patient->first_name = $data->patient->first_name;
                $tempArray->patient->last_name = $data->patient->last_name;
                $tempArray->patient->vip = $data->patient->vip;
                $tempArray->patient->profile_url = $data->patient->profile_url;
                $tempArray->patient->contact = $data->patient->contact;
                $tempArray->patient->address = $data->patient->address;
                $tempArray->patient->speciality = $data->speciality;
                $tempArray->patient->appointments = $data->patient->appointments;
                $tempArray->patient->contact = $data->patient->contact;
                $tempArray->patient->address = $data->patient->address;
                $tempArray->start = $data->appointment_starttime;
                $tempArray->end = $data->appointment_endtime;
                $tempArray->starttimestamp = $data->starttimestamp;
                $tempArray->endtimestamp = $data->endtimestamp;
                $tempArray->allDay = false;
                $tempArray->className = $className;
                $tempArray->overlap = false;
                $tempArray->category = $data->treatment_type_id;
                $tempArray->treatmentType = '';
                $tempArray->speciality = "Speciality";
                $tempArray->content = $data->appointment_observation;
                $tempArray->status = $data->status;
                $tempArray->appointment_type_id = $data->appointment_type_id;
                $tempArray->speciality_id = $data->speciality_id;
                $tempArray->dental_plan_id = $data->dental_plan_id;
                $tempArray->appointment_observation = $data->appointment_observation;

                $tempArray->patient->speciality = DB::select("SELECT `specialities`.*, `treatment_specialities`.`treatment_type_id` from `specialities` inner join `treatment_specialities` on `treatment_specialities`.`speciality_id` = `specialities`.`id` where `treatment_specialities`.`treatment_type_id` = '" . $data->treatment_type_id . "'");

                if ($data->created_by != '') {
                    $use = User::find($data->created_by);
                    if ($use->hasRole('receptionist')) {
                        $tempArray->booked_by = 'receptionist';
                    } else {
                        $tempArray->booked_by = 'dentist';
                    }
                } else {
                    $tempArray->booked_by = 'dentist';
                }
                array_push($calendarArray, $tempArray);
            }
        }

        // get holidays
        $holidays = UserHoliday::where('user_id', $id)->get();
        foreach ($holidays as $data) {
            $hol = new \stdClass();
            $hol->title = "Holiday";
            $hol->start = $data->start_date;
            $hol->end = $data->end_date;
            $hol->starttimestamp = $data->starttimestamp;
            $hol->endtimestamp = $data->endtimestamp;
            $hol->className = "holiday_event";
            array_push($calendarArray, $hol);
        }
        $calendarArray = json_encode($calendarArray);

        // agenda settings
        /*$agendaSettings = Agenda::where('user_id', '=', $user->id)->first();
        if ($agendaSettings) {
            $agendaSettings = json_decode($agendaSettings['settings']);
        }*/

        // getting current clinic dentists
        $dentist = Role::where('name', 'Dentist')->first()->users()->where('clinic_id', $user->clinic_id)->get();

        //$dentist = Dentist::where('clinic_id', '=', $user->clinic_id)->select("id", "first_name", "last_name", "user_id")->get();
        //print_r($dentist);
        /*foreach ($dentist as $d) {
            $name = $d->first_name . " " . $d->last_name;
            $professionals[$d->user->id] = $name;
        }*/

        $professionals = $dentist->pluck('name', 'id');
        $dentist_id = $user->id;

        return view('calendar', compact('title', 'subtitle', 'activeClass', 'types', 'treatmentTypes', 'dentalPlans',
            'calendarArray', 'professionals', 'dentist_id', 'treatmentTypesWithPrice', 'report_models', 'treatments', 'agendaSettings', 'specialities',
            'holidays'));
    }

    /* public function create()
     {
         //
     }

     public function store(Request $request)
     {
         //
         $clinic_id = Auth::user()->clinic_id;

         $appointment = Appointment::create([
             'clinic_id'               => $clinic_id,
             'dentist_id'              => $request->dentist_id,
             'patient_id'              => $request->patient_id,
             'appointment_type_id'     => $request->appointment_type_id,
             'speciality_id'           => $request->speciality_id,
             'dental_plan_id'          => $request->dental_plan_id,
             'appointment_starttime'   => $request->start,
             'startdate'               => $request->startdate,
             'appointment_endtime'     => $request->end,
             'starttimestamp'          => $request->starttimestamp,
             'endtimestamp'            => $request->endtimestamp,
             'appointment_observation' => $request->appointment_observation,
             'status'                  => $request->status,
             'created_by'              => Auth::user()->id,
         ]);
         if ($appointment->id) {
             return response()->json(['status' => 'success', 'message' => 'Appointment Saved!', 'id' => $appointment->id]);
         } else {
             return response()->json(['status' => 'success', 'message' => 'Some Error Occured']);
         }
     }

     public function show($id)
     {
         $user = Auth::user();
         //
         if ($user->hasRole('dentistadmin') || $user->hasRole('receptionist')) {
             return $this->userAppointments($id);
         } else {
             //# code...
             abort(404);
         }
     }

     public function edit($id)
     {
         //
     }

     public function update(Request $request, $id)
     {
         $appointment = Appointment::find($id);
         if ($appointment) {
             $appointment->appointment_type_id = $request->appointment_type_id;
             $appointment->speciality_id = $request->speciality_id;
             $appointment->dental_plan_id = $request->dental_plan_id;
             $appointment->appointment_starttime = $request->start;
             $appointment->appointment_endtime = $request->end;
             $appointment->appointment_observation = $request->appointment_observation;
             $appointment->starttimestamp = $request->starttimestamp;
             $appointment->endtimestamp = $request->endtimestamp;
             $appointment->status = $request->status;
             $appointment->save();

             return response()->json(['status' => 'success', 'message' => 'Appointment Updated!']);
         } else {
             return response()->json(['status' => 'success', 'message' => 'Some Error Occured']);
         }
     }

     public function updateStatus(Request $request, $id)
     {
         $appointment = Appointment::find($id);
         if ($appointment) {
             $input = $request->all();
             $appointment->fill($input)->save();
             return response()->json(['status' => 'success', 'message' => 'Appointment Updated!']);
         } else {
             return response()->json(['status' => 'success', 'message' => 'Some Error Occured']);
         }
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
     * UPDATE APPOINTMENT
     */
    public function updateAppointment(Request $request, $id)
    {

    }

    /**
     * GET GIVEN DATE APPOINTMENTS OF DENTIST
     */
    /*public function getTodaysEvent(Request $request)
    {
        $count = Appointment::where([['startdate', '=', $request->date], ['dentist_id', '=', $request->dentist_id]])->count();
        $appointments = Appointment::where([['startdate', '=', $request->date], ['dentist_id', '=', $request->dentist_id]])->orderBy('starttimestamp', 'asc')->get();

        if ($count > 0) {

            $i = 0;
            foreach ($appointments as $data) {
                $patient = Patient::find($data->patient_id);
                $appointments[$i]->patient = $patient;
                $appointments[$i]->patient->contact = $patient->contact;
                $i++;
            }

            return response()->json(['status' => 'success', 'message' => $appointments]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'No Appointments found By the given Date.']);
        }

    }

    /**
     * ADDING DOCUMENT
     */
    /*   public function addDocument(Request $request)
       {
           $input = $request->all();

           $appointment_id = $request->appointment_id;
           if ($appointment_id == '') {
               return response()->json(['status' => 'error', 'message' => "Some Error Occured! Please refresh the page."]);
           } else {
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

                   $image = PatientTreatmentImage::create([
                       'url'            => $url,
                       'patient_id'     => $patient->id,
                       'appointment_id' => $appointment_id
                   ]);
                   if ($image->id) {
                       $gettingDocuments = $this->getPatientTreatmentDocuments($request);
                       return response()->json(['status' => 'success', 'message' => $gettingDocuments]);
                   } else {
                       return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
                   }
               }
           }
       }
   */
    /**
     * DELETING
     */
    /*   public function deleteDocument($id)
       {
           $document = PatientTreatmentImage::find($id);
           //$dentist = Dentist::findOrFail($id);
           if ($document->id) {
               unlink($document->url);
               $document->delete();
               return response()->json(['status' => 'success', 'message' => "Deleted."]);
           } else {
               return response()->json(['status' => 'error', 'message' => "Some Error Occured!"]);
           }
       }
   */
    /* public function upload($file, $id)
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

   /*  public function getPatientTreatmentDocuments(Request $request)
     {
         $id = $request->appointment_id;
         $documents = PatientTreatmentImage::where('appointment_id', '=', $id)->get();
         return $documents;
     }*/

    /**
     * ADDING QUOTATION
     */
    /*  public function addQuotation(Request $request)
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
                  'content'        => $request->content,
                  'appointment_id' => $request->appointment_id,
                  'patient_id'     => $request->patient_id,
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
    /*   public function summary(Request $request)
       {
           $id = $request->appointment_id;
           $appointment = Appointment::find($id);
           if ($appointment->id) {
               $appointment->patient = $appointment->patient;
               $appointment->treatments = Treatment::where([['patient_id', '=', $appointment->patient_id], ['appointment_id', '=', $request->appointment_id]])->get();
               $appointment->documents = PatientTreatmentImage::where('appointment_id', '=', $appointment->id)->get();

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
           } else {
               return response()->json(['status' => 'success', 'message' => "No Quotations For now!"]);
           }

       }*/

    /**
     * Appointment details
     */
    /* public function appointmentdetails($id)
     {
         $appointment = Appointment::find($id)->first();
         $appointment->patient = $appointment->patient;
         $appointment->dentist = $appointment->dentist;
         return $appointment;
     }*/

}
