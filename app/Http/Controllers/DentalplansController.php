<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;
use App\ClinicDentalPlan;
use Illuminate\Support\Facades\Auth;

class DentalplansController extends Controller
{

    public function index()
    {
        $title = "Dental Plans";
        $subtitle = "Dental Plans List";
        $activeClass = "dentalplans";
        $plans = ClinicDentalPlan::all();
        return view('dentalplans.index', compact('title', 'subtitle', 'activeClass', 'plans'));
    }

    public function create()
    {
        $title = "Convênio";
        $subtitle = "Cadastrar novo Convênio";
        $activeClass = "dentalplans";
        $states = State::pluck('name', 'id');

        return view('dentalplans.create', compact('title', 'subtitle', 'activeClass', 'states', 'borough'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $plan = ClinicDentalPlan::create($input);
        if ($plan->id) {
            return response()->json(['status' => 'success', 'message' => 'Dental Plan Created!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function show($id)
    {
        $title = "Convênio";
        $subtitle = '';
        $activeClass = "dentalplans";
        $subtitle = "";

        $user = Auth::user();
        $plan = ClinicDentalPlan::find($id);

        return view('treatments.show', compact('title', 'subtitle', 'patient', 'activeClass', 'plan'));
    }

    public function edit($id)
    {
        $title = "Convênio";
        $subtitle = "Alterar informação do convênio";
        $activeClass = "dentalplans";

        $plan = ClinicDentalPlan::find($id);

        return view('dentalplans.edit', compact('title', 'subtitle', 'patient', 'activeClass', 'plan'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $dentalplan = ClinicDentalPlan::find($id);
        if ($dentalplan->id) {
            $dentalplan->fill($input)->save();
            return response()->json(['status' => 'success', 'message' => "Cadastro atualizado com sucesso!"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Ocorreu um erro!"]);
        }
    }

    public function destroy($id)
    {
        //
    }

    public function permission()
    {
        $array = array(
            array('Show All Dental Plan', 'dentalplanscontroller.index', 'ClinicDentalPlan', 'Show All Dental Plan'),
            array('Create Dental Plan', 'dentalplanscontroller.create', 'ClinicDentalPlan', 'Create New Dental Plan'),
            array('Store Dental Plan', 'dentalplanscontroller.store', 'ClinicDentalPlan', 'Save Dental Plan'),
            array('Show Dental Plan', 'dentalplanscontroller.show', 'ClinicDentalPlan', 'Show Dental Plan'),
            array('Edit Dental Plan', 'dentalplanscontroller.edit', 'ClinicDentalPlan', 'edit Dental Plan'),
            array('Update Dental Plan', 'dentalplanscontroller.update', 'ClinicDentalPlan', 'Update Dental Plan'),
            array('Destroy Dental Plan', 'dentalplanscontroller.destroy', 'ClinicDentalPlan', 'Destroy Dental Plan'),
        );

        // checking
       /* foreach ($array as $data) {
            $count = Permission::where('slug', '=', $data[1])->count();
            if ($count == '0') {
                // adding permission
                Permission::create([
                    'name' => $data[0],
                    'slug' => $data[1],
                    'model' => $data[2],
                    'description' => $data[3],
                ]);
            }
        }
        exit;*/
    }

}
