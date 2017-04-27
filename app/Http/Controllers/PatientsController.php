<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Disease;
use App\Patient;
use App\Referral;
use App\Specialty;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
    public function index()
    {
        $title = "Pacientes";
        $subtitle = 'Informações dos Pacientes';
        $activeClass = "patients";
        $user = Auth::user();

        // TODO: based on roles, filter out patients by clinic
        $patients = Patient::all();

       /* if ($user->isAdmin() || $user->hasRole('receptionist')) {
            $users = Patient::where('clinic_id', $user->clinic_id)->get();
        }*/

       /* $i = 0;
        foreach ($users as $data) {
            $users[$i]->speciality = DB::select("SELECT `specialties`.*, `patient_speciality`.`patient_id` from `specialties` inner join `patient_speciality` on `patient_speciality`.`speciality_id` = `specialities`.`id` where `patient_speciality`.`patient_id` ='" . $data->id . "'");
            $i++;
        }*/

        return view('patients.index', compact('title', 'subtitle', 'patients', 'activeClass'));
    }

    public function create()
    {
        $title = "Cadastrar Novo Paciente";
        $subtitle = "Criar um novo cadastro de paciente";
        $activeClass = "patients";

        // getting clinics
        $professionals = [];

        // getting diseases
        $disease = Disease::all();

        $i = 0;
        foreach ($disease as $data) {
            $disease[$i]->value = "0";
            $disease[$i]->action = false;
            $i++;
        }

        $dentist = User::where('clinic_id', Auth::user()->clinic_id)->get();
        foreach ($dentist as $data) {
            $name = $data->first_name . " " . $data->last_name;
            $professionals[$data->id] = $name;
        }

        $treatments = Specialty::pluck('name', 'id');
        $referrals = Referral::pluck('name', 'id');

        $clinics = Clinic::pluck('name', 'id');
        return view('patients.create', compact('title', 'subtitle', 'activeClass', 'clinics', 'disease', 'professionals', 'treatments', 'referrals'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $input['clinic_id'] = Auth::user()->clinic_id;

        // adding patient
        $patient = Patient::create($input);
        if (!$patient->id)
            return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);


        // uploading profile image
        if (isset($input['patient_profile_image'])) {
            if (!file_exists('uploads/' . Auth::user()->clinic_id)) {
                mkdir('uploads/' . Auth::user()->clinic_id, 0755, true);
            }
            if (!file_exists('uploads/' . Auth::user()->clinic_id . "/patients/profile/" . $patient->id)) {
                mkdir('uploads/' . $patient->clinic_id . "/patients/profile/" . $patient->id, 0755, true);
            }
            $url = $this->upload($input['patient_profile_image'], Auth::user()->clinic_id . "/patients/profile/" . $patient->id);
            $patient->patient_profile_image = $url;
            $patient->save();
        }

        // adding patient address
        /*
                    $address = Address::create($input);
                    if ($address) {
                        $patient = $patient::find($patient->id);
                        $patient->address_id = $address->id;
                        $patient->save();
                    }
        */
        // adding patient contact
        /*
                    $contact = Contact::create($input);
                    if ($contact) {
                        $patient = $patient::find($patient->id);
                        $patient->contact_id = $contact->id;
                        $patient->save();
                    }*/

        // saving patient disease
        /*if (isset($request->diseases)) {
            $diseases = json_decode($request->diseases);
            foreach ($diseases as $key => $val) {
                $u = PatientDisease::create([
                    'patient_id' => $patient->id,
                    'disease_id' => $key,
                    'status'     => $val
                ]);
            }
        }*/

        // adding patient speciality
        // TODO: adding dynamic tabs on specialty select
        /*
                    if (isset($input['speciality'])) {
                        $speciality = $input['speciality'];
                        foreach ($speciality as $d) {
                            $check = PatientSpeciality::where([['patient_id', '=', $patient->id], ['speciality_id', '=', $d]])->count();
                            if ($check > 0) {
                            } else {
                                PatientSpeciality::create([
                                    'patient_id'    => $patient->id,
                                    'speciality_id' => $d,
                                ]);
                            }
                        }
                    }
        */
        // getting patient

        $p = Patient::find($patient->id);
        //$p->contact = Contact::find($p->contact_id);
        //$p->address = Address::find($p->address_id);

        return response()->json(['status' => 'success', 'message' => "Paciente cadastrado com sucesso!", 'json' => $p]);
    }

    public function show($id)
    {
        $title = "View Patient";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "patients";

        $patient = Patient::find($id);

        $patient->speciality = DB::select("SELECT `specialities`.*, `patient_speciality`.`patient_id` from `specialities` inner join `patient_speciality` on `patient_speciality`.`speciality_id` = `specialities`.`id` where `patient_speciality`.`patient_id` ='" . $patient->id . "'");

        $patient->diseases = DB::select("SELECT `diseases`.*, `patient_disease`.`patient_id` from `diseases` inner join `patient_disease` on `patient_disease`.`disease_id` = `diseases`.`id` where `patient_disease`.`patient_id` ='" . $patient->id . "'");

        // getting recent appointments

        $appointments = Appointment::where('patient_id', '=', $patient->id)->orderBy('starttimestamp', 'desc')->get();

        // missed appointments

        $missedAppointments = Appointment::where('status', '=', '3')->count();

        return view('patients.show', compact('title', 'subtitle', 'patient', 'activeClass', 'patient', 'appointments', 'missedAppointments'));
    }

    public function edit($id)
    {
        $title = "Patients";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "patients";
        $user = Auth::user();
        $subtitle = "Informações detalhadas de todos tratamentos";

        // getting users

        $pUsers = array();

        $patient = Patient::find($id);

        // get this clinic dentist

        $dentist = DB::table('dentists')->where('clinic_id', '=', $patient->clinic_id)->select("id", "first_name", "last_name")->get();
        $professionals = [];

        // getting diseases

        $disease = Disease::all();
        $i = 0;
        foreach ($disease as $data) {
            $patientDisease = PatientDisease::where([['patient_id', '=', $patient->id], ['disease_id', '=', $data->id]])->first();
            if (isset($patientDisease->id)) {
                if ($patientDisease->status == "1") {
                    $disease[$i]->value = "1";
                    $disease[$i]->action = true;
                } else {
                    $disease[$i]->value = "0";
                    $disease[$i]->action = false;
                }
            } else {
                $disease[$i]->value = "0";
                $disease[$i]->action = false;
            }
            $i++;
        }

        foreach ($dentist as $data) {
            $name = $data->first_name . " " . $data->last_name;
            $professionals[$data->id] = $name;
        }

        // getting treatment types
        $treatments = Speciality::pluck('title', 'id');

        // getting all roles
        return view('patients.edit', compact('title', 'subtitle', 'patient', 'activeClass', 'professionals', 'disease', 'patientDisease', 'treatments'));
    }

    public function update(Request $request, $id)
    {
        if ($request->action === 'save_profile') {
            $patient = Patient::find($id);
            if (!empty($patient)) {

                $input = $request->all();
                if (!isset($input['sms_confirmation'])) {
                    $input['sms_confirmation'] = 0;
                }
                if (!isset($input['vip'])) {
                    $input['vip'] = 0;
                }
                if (!isset($input['allow_profile_use'])) {
                    $input['allow_profile_use'] = 0;
                }
                $patient->fill($input)->save();

                // adding patient speciality

                if (isset($input['speciality'])) {
                    PatientSpeciality::where('patient_id', '=', $patient->id)->delete();
                    $speciality = $input['speciality'];
                    foreach ($speciality as $d) {
                        $check = PatientSpeciality::where([['patient_id', '=', $patient->id], ['speciality_id', '=', $d]])->count();
                        if ($check > 0) {
                        } else {
                            PatientSpeciality::create([
                                'patient_id' => $patient->id,
                                'speciality_id' => $d,
                            ]);
                        }
                    }
                }

                // uploading profile image

                if (isset($input['patient_profile_image'])) {
                    if (!file_exists('uploads/' . Auth::user()->clinic_id)) {
                        mkdir('uploads/' . Auth::user()->clinic_id, 0755, true);
                    }
                    if (!file_exists('uploads/' . Auth::user()->clinic_id . "/patients/profile/" . $patient->id)) {
                        mkdir('uploads/' . $patient->clinic_id . "/patients/profile/" . $patient->id, 0755, true);
                    }
                    $url = $this->upload($input['patient_profile_image'], Auth::user()->clinic_id . "/patients/profile/" . $patient->id);
                    $patient->profile_url = $url;
                    $patient->save();
                }

                // saving contact

                $contact = Contact::find($patient->contact->id);
                $contact->fill($input)->save();

                // saving address

                $address = Address::find($patient->address->id);
                $address->fill($input)->save();

                return "success";
            } else {
                return "Paciente não foi localizado!";
            }
        } else if ($request->action === 'save_health') {

            $patient = Patient::find($id);
            $input = $request->all();

            if (!empty($patient)) {
                $patient->fill($input)->save();

                // saving patient disease

                foreach ($request->disease as $key => $val) {
                    $patientDisease = PatientDisease::where([
                        ['patient_id', '=', $patient->id],
                        ['disease_id', '=', $key]])->first();
                    if (isset($patientDisease->id)) {
                        $u = PatientDisease::find($patientDisease->id);
                        $u->status = $val;
                        $u->save();
                    } else {
                        $u = PatientDisease::create([
                            'patient_id' => $patient->id,
                            'disease_id' => $key,
                            'status' => $val
                        ]);
                    }
                }

                return "success";
            } else {
                return "Paciente não foi localizado!";
            }
        } else {
            return "Ocorreu algum erro!";
        }
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);

        if ($patient->delete()) {

            // deleting directory

            $destinationPath = 'uploads/patients/profile/' . $id; // upload path

            // deleting patient Address

            $address = Address::findOrFail($patient->address_id);
            if ($address) {
                $address->delete();
            }

            // deleting patient Contact

            $contact = Contact::findOrFail($patient->contact_id);
            if ($contact) {
                $contact->delete();
            }

            // deleting patient appointments

            $appointments = Appointment::where('patient_id', '=', $patient->id)->count();
            if ($appointments > 0) {
                Appointment::where('patient_id', '=', $patient->id)->delete();
            }

            // deleting patient exams

            $exams = PatientExams::where('patient_id', '=', $patient->id)->count();
            if ($exams > 0) {
                PatientExams::where('patient_id', '=', $patient->id)->delete();
            }

            // deleting Pictogram

            $tImages = Pictogram::where('patient_id', '=', $patient->id)->count();
            if ($tImages > 0) {
                Pictogram::where('patient_id', '=', $patient->id)->delete();
            }

            // deleting Treatments

            $treatments = Treatment::where('patient_id', '=', $patient->id)->count();
            if ($treatments > 0) {
                Treatment::where('patient_id', '=', $patient->id)->delete();
            }

            return response()->json(['status' => 'success', 'message' => "Paciente Excluído com Sucesso!"]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu alum erro!']);
        }
    }

    /**
     * GETTING PATIENTS LIST
     * @param Request $request
     * @return
     */
    public function getPatientList(Request $request)
    {
        $patients = Patient::where([['first_name', 'like', $request->name . '%'], ['clinic_id', Auth::user()->clinic_id]])
            ->orWhere('phone_1', 'like', $request->name . '%')
            /*->leftJoin('contact', 'contact.id', 'patients.contact_id')
           /* ->select('patients.*', 'contact.celular_1')*/
            ->get();
        $i = 0;

        foreach ($patients as $data) {

            $patients[$i]->contact = $data->contact;
            $patients[$i]->address = $data->address;

            $patients[$i]->speciality =
                DB::select("SELECT `specialties`.*, `patient_specialty`.`patient_id` from `specialties`
                inner join `patient_specialty` on `patient_specialty`.`specialty_id` = `specialties`.`id`
                where `patient_specialty`.`patient_id` ='" . $data->id . "'");

            $k = 0;
            foreach ($data->appointments as $v) {
                $dentist = Dentist::where('user_id', '=', $v->dentist_id)->select('first_name', 'last_name')->first();
                $data->appointments[$k]->dentist = $dentist;
                if ($data->appointments[$k]->status == '1') {
                    $s = "Booked";
                }
                if ($data->appointments[$k]->status == '2') {
                    $s = "Confirmed";
                }
                if ($data->appointments[$k]->status == '3') {
                    $s = "Cancelled";
                }
                if ($data->appointments[$k]->status == '4') {
                    $s = "Missed";
                }
                if ($data->appointments[$k]->status == '5') {
                    $s = "Finished";
                }

                $data->appointments[$k]->status = $s;

                $k++;
            }
            $i++;
        }
        return $patients;
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

    /**
     * PATIENT STATS
     **/
    public function stats()
    {
        $title = "Patient Stats";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "patients";
        $user = Auth::user();

        // count patients

        $patients = array();
        $count = Patient::where('clinic_id', $user->clinic_id)->count();
        $patients['count'] = $count;

        // dental plan

        $insuredPlan = Patient::where([['clinic_id', $user->clinic_id], ['has_dental_plan', '1']])->count();
        $patients['insuredPlan'] = $insuredPlan;

        $privatePlan = Patient::where([['clinic_id', $user->clinic_id], ['has_dental_plan', '0']])->count();
        $patients['privatePlan'] = $privatePlan;


        // getting all roles

        return view('patients.stats', compact('title', 'subtitle', 'activeClass', 'patients'));
    }

}
