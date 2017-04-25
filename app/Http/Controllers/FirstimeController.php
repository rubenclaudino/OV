<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;
use Auth;
use App\Dentist;

class FirstimeController extends Controller
{

    public function index()
    {
        $title = "Setup Odontovision";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        // getting users

        $specialities = Speciality::pluck('title', 'id');
        if (Auth::user()->hasRole('dentistadmin')) {
            $user = Dentist::where('user_id', '=', Auth::user()->id)->first();
        }

        // getting all roles
        return view('firsttime.index', compact('title', 'subtitle', 'specialities', 'user'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
