<?php

namespace App\Http\Controllers;

use App\Specialty;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreatmentTypesController extends Controller
{

    public function create()
    {
        $title = "Procedimento";
        $subtitle = "Cadastrar um novo procedimento";
        $activeClass = "treatmenttypes";
        $speciality = Specialty::pluck('name', 'id');

        return view('treatmenttypes.create', compact('title', 'subtitle', 'activeClass', 'speciality'));
    }

    public function index()
    {
        $title = "Procedimentos";
        $subtitle = "Visualização de todos procedimentos";
        $activeClass = "treatmenttypes";
        $user = Auth::user();
        // getting users
        $pUsers = array();

        $treatments = Specialty::all();

        /*$i = 0;
        foreach ($treatments as $data) {
            $dd = DB::select("SELECT `specialities`.*, `treatment_specialities`.`treatment_type_id` from `specialities` inner join `treatment_specialities` on `treatment_specialities`.`speciality_id` = `specialities`.`id` where `treatment_specialities`.`treatment_type_id` = '" . $data->id . "'");
            $treatments[$i]->speciality = $dd;

            // treatment type customization so that if a clinic have customized their treatment type
            if ($user->hasRole('admin')) {
            } else {
                $t = SpecialtyClinic::where([['treatment_type_id', '=', $data->id], ['clinic_id', '=', $user->clinic_id]])->count();
                if ($t > 0) {
                    $tt = SpecialtyClinic::where([['treatment_type_id', '=', $data->id], ['clinic_id', '=', $user->clinic_id]])->first();
                    $treatments[$i]->price = $tt->price;
                    $treatments[$i]->observation = $tt->observation;
                    $treatments[$i]->alert_message = $tt->alert_message;
                    $treatments[$i]->status = $tt->status;
                    $treatments[$i]->default_percentage = $tt->default_percentage;
                    $treatments[$i]->standard_dentist_percentage = $tt->standard_dentist_percentage;
                }
            }

            $i++;
        }*/

        return view('treatmenttypes.index', compact('title', 'subtitle', 'treatments', 'activeClass'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $plan = Specialty::create($input);
        if ($plan->id) {
            // adding speciality
            if (is_array($input['speciality'])) {
                foreach ($input['speciality'] as $data) {
                    Specialty::create([
                        'treatment_type_id' => $plan->id,
                        'speciality_id' => $data,
                    ]);
                }
            } else {
                Specialty::create([
                    'treatment_type_id' => $plan->id,
                    'speciality_id' => $input['speciality'],
                ]);
            }
            return response()->json(['status' => 'success', 'message' => 'Treatment Plan Created!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function show($id)
    {
        $title = "Treatment Plan";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "treatments";
        $user = Auth::user();
        $subtitle = "Informações detalhadas de todos tratamentos";
        $plan = Specialty::find($id);

        $specialities = DB::select("SELECT `specialities`.*, `treatment_specialities`.`treatment_type_id` from `specialities` inner join `treatment_specialities` on `treatment_specialities`.`speciality_id` = `specialities`.`id` where `treatment_specialities`.`treatment_type_id` = '" . $plan->id . "'");
        $plan->speciality = $specialities;

        return view('treatmenttypes.show', compact('title', 'subtitle', 'patient', 'activeClass', 'plan'));
    }

    public function edit($id)
    {
        $title = "Procedimento";
        $subtitle = 'Editar os dados do procedimento';
        $activeClass = "treatmenttypes";
        $user = Auth::user();

        // getting users
        $pUsers = array();

        $speciality = Specialty::pluck('title', 'id');

        $dentists = User::where('clinic_id', '=', $user->clinic_id)->get();
        /*if (!empty($dentists)) {
            $i = 0;
            foreach ($dentists as $data) {
                $percentage = DentistPercentage::where([['dentist_id', '=', $data->user_id], ['plan_id', '=', $id]])->first();
                if (isset($percentage->id)) {
                    $dentists[$i]->percentage = $percentage->percentage;
                } else {
                    $dentists[$i]->percentage = 0;
                }
                $i++;
            }
        }*/

        /*$plan = Specialty::find($id);
        // treatment type customization so that if a clinic have customized their treatment type
        if ($user->hasRole('admin')) {
        } else {
            $t = SpecialtyClinic::where([['treatment_type_id', '=', $plan->id], ['clinic_id', '=', $user->clinic_id]])->count();
            if ($t > 0) {
                $tt = SpecialtyClinic::where([['treatment_type_id', '=', $plan->id], ['clinic_id', '=', $user->clinic_id]])->first();
                $plan->price = $tt->price;
                $plan->observation = $tt->observation;
                $plan->alert_message = $tt->alert_message;
                $plan->status = $tt->status;
                $plan->default_percentage = $tt->default_percentage;
                $plan->standard_dentist_percentage = $tt->standard_dentist_percentage;
            }
        }*/
        return view('treatmenttypes.edit', compact('title', 'subtitle', 'patient', 'activeClass', 'plan', 'dentists', 'speciality'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
       /* $treatmentPlan = Specialty::find($id);
        if ($treatmentPlan->id) {

            // checking if the user is admin then it will save it normal
            // but if the user is dentist admin
            // then it will save as in treatmentypebyclinic

            $user = Auth::user();
            if ($user->hasRole('dentistadmin')) {

                $treatmentTypeByClinic = SpecialtyClinic::where([['treatment_type_id', '=', $treatmentPlan->id], ['clinic_id', '=', $user->clinic_id]])->count();
                if ($treatmentTypeByClinic > 0) {
                    $treatments = SpecialtyClinic::where([['treatment_type_id', '=', $treatmentPlan->id], ['clinic_id', '=', $user->clinic_id]])->first();
                    $treatments->fill($input)->save();
                } else {
                    $input['clinic_id'] = Auth::user()->clinic_id;
                    $input['treatment_type_id'] = $treatmentPlan->id;
                    SpecialtyClinic::create($input);
                }
            }
            if ($user->hasRole('admin')) {
                $treatmentPlan->fill($input)->save();
                // adding speciality
                $speciality = Specialty::where('treatment_type_id', '=', $treatmentPlan->id)->delete();
                if (is_array($input['speciality'])) {
                    foreach ($input['speciality'] as $data) {
                        Specialty::create([
                            'treatment_type_id' => $treatmentPlan->id,
                            'speciality_id' => $data,
                        ]);
                    }
                } else {
                    Specialty::create([
                        'treatment_type_id' => $treatmentPlan->id,
                        'speciality_id' => $input['speciality'],
                    ]);
                }
            }
*/
            return response()->json(['status' => 'success', 'message' => "Treatment Plan Updated!"]);
        /*} else {
            return response()->json(['status' => 'error', 'message' => "Some Error Occured!"]);
        }*/
    }

}
