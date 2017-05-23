<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\City;
use App\State;
use Illuminate\Http\Request;
use App\ClinicDentalPlan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClinicDentalPlansController extends Controller
{

    public function index()
    {
        if (Auth::user()->isAdmin())
            $plans = ClinicDentalPlan::all()->sortByDesc('name');
        else {
            $plans = ClinicDentalPlan::where('clinic_id', Auth::user()->clinic_id)
                ->get()
                ->sortByDesc('name');
        }

        return view('dentalplans.index', compact('plans'));
    }

    public function create()
    {
        $cities = City::pluck('name', 'id');
        $states = State::pluck('abbreviation', 'id');

        return view('dentalplans.create', compact('states', 'cities'));
    }

    public function store(Request $request)
    {
        $request['clinic_id'] = Auth::user()->clinic_id;

        ClinicDentalPlan::create($request->all());

        return redirect('dentalplans')->with(
            [
                'alert-type' => 'success',
                'message' => 'Convênio cadastrado com sucesso!'
            ]);
    }

    public function show($id)
    {
        if (Auth::user()->isAdmin())
            $plans = ClinicDentalPlan::all()->count();
        else {
            $plans = ClinicDentalPlan::where('clinic_id', Auth::user()->clinic_id)
                ->count();
        }

        $plan = ClinicDentalPlan::find($id);
        $dentists = Appointment::select('users.gender', 'users.first_name', 'users.last_name', DB::raw('count(*) as count'))
            ->join('users', 'users.id', '=', 'appointments.user_id')
            ->where('clinic_dental_plan_id', $id)
            ->groupBy('appointments.user_id')
            ->get();

        $cities = City::pluck('name', 'id');
        $states = State::pluck('abbreviation', 'id');

        return view('dentalplans.show', compact('plan', 'plans', 'states', 'cities', 'dentists'));
    }

    public function edit($id)
    {
        $plan = ClinicDentalPlan::find($id);
        $cities = City::pluck('name', 'id');
        $states = State::pluck('abbreviation', 'id');

        return view('dentalplans.edit', compact('patient', 'plan', 'cities', 'states'));
    }

    public function update(Request $request, $id)
    {
        ClinicDentalPlan::find($id)->update($request->all());

        return redirect('dentalplans')->with(
            [
                'alert-type' => 'success',
                'message' => 'Convênio atualizado com sucesso!'
            ]);
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
