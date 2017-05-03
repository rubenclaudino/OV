<?php

namespace App\Http\Controllers;

use App\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $title = "Appointment";
        $subtitle = "Book an Appointment";
        $activeClass = "dashboard";

        // TODO: filter based on clinic
        $appointments = Appointment::all();
        return view('home', compact('title', 'subtitle', 'activeClass', 'appointments'));
    }

    public function joinus()
    {
        $title = "join us";
        $subtitle = "Book an Appointment";
        $activeClass = "dashboard";
        return view('home', compact('title', 'subtitle', 'activeClass'));

    }

}
