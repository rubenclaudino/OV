<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HolidaysController extends Controller
{

    public function index()
    {
        $title = "Calendar Holidays";
        $subtitle = "Reserve a Slot in Calendar";
        $activeClass = "appointments";
        $holidays = Holidays::all();

        return view('holidays.index', compact('title', 'subtitle', 'activeClass', 'holidays'));
    }

    public function create()
    {
        $title = "Add New Holiday Slot";
        $subtitle = "Add New Slot";
        $activeClass = "appointments";
        return view('holidays.create', compact('title', 'subtitle', 'activeClass'));
    }
}
