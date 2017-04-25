<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $title = "Appointment";
        $subtitle = "Book an Appointment";
        $activeClass = "dashboard";

        return view('home', compact('title', 'subtitle', 'activeClass'));
    }

    public function joinus()
    {
        $title = "join us";
        $subtitle = "Book an Appointment";
        $activeClass = "dashboard";
        return view('home', compact('title', 'subtitle', 'activeClass'));

    }

}
