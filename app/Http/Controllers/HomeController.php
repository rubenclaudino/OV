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
        $appointments_clinic = Appointment::where('clinic_id', (Auth::user()->clinic_id))->get();
        $appointments_user = Appointment::where('clinic_id', (Auth::user()->clinic_id))->where('user_id', (Auth::user()->id))->get();
        $patients_clinic = Patient::where('clinic_id', (Auth::user()->clinic_id))->get();
        $patients_user = Patient::where('clinic_id', (Auth::user()->clinic_id))->where('user_id', (Auth::user()->id))->get();

        $clinic = Clinic::with('appointments')->find(Auth::user()->clinic_id);

        return view('home', compact('appointments_clinic', 'patients_clinic', 'clinic', 'patients_user', 'appointments_user'));
    }

    public function joinus()
    {
        return view('home.joinus');
    }
}
