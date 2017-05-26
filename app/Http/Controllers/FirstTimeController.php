<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Support\Facades\Auth;

class FirstTimeController extends Controller
{

    public function index()
    {
        $specialties = Specialty::pluck('title', 'id');
        if (Auth::user()->hasRole('dentistadmin')) {
            $user = Dentist::where('user_id', '=', Auth::user()->id)->first();
        }
        return view('firsttime.index', compact('specialties', 'user'));
    }

}
