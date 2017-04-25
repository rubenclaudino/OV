<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class InvestorsController extends Controller
{

    public function index()
    {
        $title = "";
        $subtitle = "";
        $activeClass = "investorsoutlook";

        $investors = User::whereHas(
            'roles', function($q){
            $q->where('name', 'Investor');
        }
        )->get();


        return view('investors.index', compact('title', 'subtitle', 'activeClass', 'investors'));
    }

    public function show()
    {
        $title = "";
        $subtitle = "";
        $activeClass = "investors";

        $user = Auth::user();
        $investor = Auth::user();

        return view('investors.show', compact('title', 'subtitle', 'investor', 'activeClass', 'user'));
    }

}
