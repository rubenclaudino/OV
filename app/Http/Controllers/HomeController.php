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
        $appointments = Appointment::where('clinic_id', (Auth::user()->clinic_id));
        $patients = Patient::where('clinic_id', (Auth::user()->clinic_id));
        $clinic = Clinic::with('appointments')->find(Auth::user()->clinic_id);

        return view('home', compact('appointments', 'patients', 'clinic'));
    }

    public function joinus()
    {
        return view('home.joinus');
    }
}
