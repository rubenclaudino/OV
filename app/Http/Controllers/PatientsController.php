<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Clinic;
use App\ClinicDentalPlan;
use App\Disease;
use App\Http\Requests\PatientValidationRequest;
use App\Patient;
use App\PatientDentalPlan;
use App\Referral;
use App\Role;
use App\Specialty;
use App\User;
use App\City;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::roleFilter()
            ->get()
            ->sortBy('first_name');
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        list($professionals, $diseases, $specialties, $referrals, $clinic_dental_plans, $clinics, $cities, $states) = $this->import_related_models();
        return view('patients.create', compact('clinics', 'diseases', 'professionals',
            'specialties', 'referrals', 'clinic_dental_plans', 'cities', 'states'));
    }

    public function store(PatientValidationRequest $request)
    {
        $request['clinic_id'] = Auth::user()->clinic_id;

        // TODO: clinic dental plan as foreign key in patient dental plan
        $patient = Patient::create($request->except('specialty', 'diseases', 'clinic_dental_plan_id', 'patient_dental_plans'));
        if (!$patient->id)
            return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);

        // TODO: adding dynamic tabs on specialty select
        if ($request->has('specialty')) {
            $patient->specialties()->sync($request->specialty);
        }

        if ($request->has('diseases')) {
            $diseases = array_keys(array_filter(json_decode($request->diseases, true)));
            $patient->diseases()->sync($diseases);
        }

        if ($request['patient_dental_plans']['clinic_dental_plan_id'] != null) {
            $new = array_merge($request->patient_dental_plans, ['patient_id' => $patient->id]);
            PatientDentalPlan::create($new);
        }


        $this->upload_image($request, $patient);

        return redirect('patients')->with(
            [
                'alert-type' => 'success',
                'message' => 'Paciente cadastrado com sucesso!'
            ]);
    }


    public function saveQuickpatient(PatientValidationRequest $request)
    {
        $request['clinic_id'] = Auth::user()->clinic_id;

        // TODO: clinic dental plan as foreign key in patient dental plan
        $patient = Patient::create($request->except('specialty', 'diseases', 'clinic_dental_plan_id', 'patient_dental_plans'));
        if (!$patient->id)
            return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);

        // TODO: adding dynamic tabs on specialty select
        if ($request->has('specialty')) {
            $patient->specialties()->sync($request->specialty);
        }

        if ($request->has('diseases')) {
            $diseases = array_keys(array_filter(json_decode($request->diseases, true)));
            $patient->diseases()->sync($diseases);
        }

        if ($request['patient_dental_plans']['clinic_dental_plan_id'] != null) {
            $new = array_merge($request->patient_dental_plans, ['patient_id' => $patient->id]);
            PatientDentalPlan::create($new);
        }


        $this->upload_image($request, $patient);
        return response()->json(['status' => 'success', 'message' => "Paciente cadastrado com sucesso!", 'data' => $patient, 'first_name' => $patient->first_name, 'last_name' => $patient->last_name, 'id' => $patient->id]);

    }

    public function show(Patient $patient)
    {
        $appointments = Appointment::where('patient_id', $patient->id)->orderBy('starttimestamp', 'desc')->get();
        return view('patients.show', compact('patient', 'appointments'));
    }

    public function edit(Patient $patient)
    {
        list($professionals, $diseases, $specialties, $referrals, $clinic_dental_plans, $clinics, $cities, $states) = $this->import_related_models();

        return view('patients.edit', compact('patient', 'professionals',
            'specialties', 'referrals', 'clinic_dental_plans', 'clinics', 'diseases', 'states', 'cities'));
    }

    public function update(PatientValidationRequest $request, Patient $patient)
    {
        $patient->update($request->except('specialty', 'diseases', 'clinic_dental_plan_id', 'dental_plan', 'patient_dental_plans'));
        
        //We have to check maybe patient is updating first time and don't have any dental plan yet. So if he/she has entered the dental plan details we will insert new row into table.
        if (isset($request['patient_dental_plans']['clinic_dental_plan_id'])) 
        {
            if(PatientDentalPlan::where('patient_id', $patient->id)->count() > 0)
            {
                PatientDentalPlan::where('patient_id', $patient->id)->update($request->patient_dental_plans);
            }
            else 
            {
                $insert     = $request->all()['patient_dental_plans']; //Getting multidemsional collection into simple array
                $insert['patient_id'] = $patient->id; //Manually merging patient id into it so that it can be inserted into Patient Dental Plan
                PatientDentalPlan::create($insert);
            }
        }

        $this->upload_image($request, $patient);

        return redirect('patients')->with(
            [
                'alert-type' => 'success',
                'message' => 'Paciente atualizado com sucesso!'
            ]);
    }

    public function destroy($id)
    {
        Patient::destroy($id);
        return response()->json(['status' => 'success', 'message' => "Paciente Excluído com Sucesso!"]);
    }

    /**
     * GETTING PATIENTS LIST
     * @param Request $request
     * @return
     */
    public function getPatientList(Request $request)
    {
        $patients = Patient::where([['first_name', 'like', $request->name . '%'], ['clinic_id', Auth::user()->clinic_id]])
            ->orWhere([['phone_1', 'like', $request->name . '%'], ['clinic_id', Auth::user()->clinic_id]])
            //->orWhere([['last_name', 'like', $request->name . '%'], ['clinic_id', Auth::user()->clinic_id]])
            /*->leftJoin('contact', 'contact.id', 'patients.contact_id')
           /* ->select('patients.*', 'contact.celular_1')*/
            ->orderBy('first_name', '=', 'asc')
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
                $dentist = User::where('id', $v->dentist_id)->select('first_name', 'last_name')->first();
                $data->appointments[$k]->dentist = $dentist;
                $s = "";
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
                if ($data->appointments[$k]->status == '6') {
                    $s = "Waiting";
                }

                $data->appointments[$k]->status = $s;

                $k++;
            }
            $i++;
        }
        return $patients;
    }

    /**
     * PATIENT STATS
     **/
    public function stats()
    {
        $title = "Patient Stats";
        $subtitle = 'Informações detalhadas de todos tratamentos';
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

        return view('patients.stats', compact('title', 'subtitle', 'patients'));
    }

    private function upload_image(PatientValidationRequest $request, $patient)
    {
        if ($request->hasFile('patient_profile_image')) {
            if (!file_exists('uploads/' . Auth::user()->clinic_id)) {
                mkdir('uploads/' . Auth::user()->clinic_id, 0755, true);
            }
            if(!file_exists('uploads/' . Auth::user()->clinic_id . '/patients'))
            {
                mkdir('uploads/' . Auth::user()->clinic_id . '/patients', 0755, true); //Make Patients Directory
            }
            if(!file_exists('uploads/' . Auth::user()->clinic_id . '/patients/profile'))
            {
                mkdir('uploads/' . Auth::user()->clinic_id . '/patients/profile', 0755, true); //Make Patients Directory
            }
            if (!file_exists('uploads/' . Auth::user()->clinic_id . "/patients/profile/" . $patient->id)) {
                mkdir('uploads/' . $patient->clinic_id . "/patients/profile/" . $patient->id, 0755, true);
            }
            $url = $this->upload($request->patient_profile_image, Auth::user()->clinic_id . "/patients/profile/" . $patient->id);
            $patient->patient_profile_image = $url;
            $patient->save();
        }
    }

    private function upload($file, $id)
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
     * @return array
     */
    public function import_related_models()
    {
        $diseases = Disease::all();

        foreach ($diseases as $data) {
            $data->value = "0";
            $data->action = false;
        }

        $professionals = User::whereHas('roles', function ($query) {
            $query->where('name', 'dentist');
        })->where('clinic_id', Auth::user()->clinic_id)->get()->pluck('full_name', 'id');

        $specialties = Specialty::orderBy('name')->pluck('name', 'id');
        $referrals = Referral::pluck('name', 'id');
        $clinic_dental_plans = ClinicDentalPlan::where('clinic_id', Auth::user()->clinic_id)->pluck('title', 'id');
        $clinics = Clinic::roleFilter()->pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        $states = State::pluck('abbreviation', 'id');

        return array($professionals, $diseases, $specialties, $referrals, $clinic_dental_plans, $clinics, $cities, $states);
    }

}
