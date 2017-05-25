<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class InvestorsController extends Controller
{

    public function index()
    {
        $investors = User::all();
        return view('investors.index', compact('investors'));
    }

    public function show()
    {
        $investor = Auth::user();
        return view('investors.show', compact('investor'));
    }

}
