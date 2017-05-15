<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use Illuminate\Http\Request;
use App\ClinicDentalPlan;
use Illuminate\Support\Facades\Auth;

class DentalplansController extends Controller
{

    public function index()
    {
        $title = "Convênios";
        $subtitle = "";
        $activeClass = "dentalplans";
        $plans = ClinicDentalPlan::all();

        return view('dentalplans.index', compact('title', 'subtitle', 'activeClass', 'plans'));
    }

    public function create()
    {
        $title = "Convênio";
        $subtitle = "Cadastrar novo Convênio";
        $activeClass = "dentalplans";

        $cities = City::pluck('name', 'id');
        $states = State::pluck('name', 'id');

        return view('dentalplans.create', compact('title', 'subtitle', 'activeClass', 'states', 'cities'));
    }

    public function store(Request $request)
    {
        $request['clinic_id'] = Auth::user()->clinic_id;
        ClinicDentalPlan::create($request->all());
        return redirect('dentalplans');
            //response()->json(['status' => 'success', 'message' => 'Dental Plan Created!']);
    }

    public function show($id)
    {
        $title = "Convênio";
        $activeClass = "dentalplans";

        $plans = ClinicDentalPlan::all()->count();
        $plan = ClinicDentalPlan::find($id);

        return view('dentalplans.show', compact('title', 'activeClass', 'plan', 'plans'));
    }

    public function edit($id)
    {
        $title = "Convênio";
        $subtitle = "Alterar informação do convênio";
        $activeClass = "dentalplans";

        $plan = ClinicDentalPlan::find($id);
        $cities = City::pluck('name', 'id');
        $states = State::pluck('name', 'id');

        return view('dentalplans.edit', compact('title', 'subtitle', 'patient', 'activeClass', 'plan', 'cities', 'states'));
    }

    public function update(Request $request, $id)
    {
        ClinicDentalPlan::find($id)->update($request->all());
        return redirect('dentalplans')->with('status', "Cadastro atualizado com sucesso!");
           // response()->json(['status' => 'success', 'message' => "Cadastro atualizado com sucesso!"]);
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
