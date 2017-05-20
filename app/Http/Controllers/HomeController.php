<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Clinic;
use App\ClinicDentalPlan;
use App\Patient;
use App\PatientDentalPlan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        // TODO: filter based on clinic
        $appointments = Appointment::all();
        $patients = Patient::with('patient_dental_plans');
        $clinic = Clinic::with('appointments')->find(Auth::user()->clinic_id);

        $patients_with_dental_plan = 0;
        foreach ($patients as $patient){
            if($patient->patient_dental_plans->count() > 0)
                $patients_with_dental_plan++;
        }

        return view('home', compact('appointments', 'patients', 'clinic', 'patients_with_dental_plan'));
    }

    public function joinus()
    {
        return view('home.joinus');
    }
}
