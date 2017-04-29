<?php

namespace App\Http\Controllers;

use App\UserHoliday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HolidaysController extends Controller
{

    public function index()
    {
        $title = "Calendar Holidays";
        $subtitle = "Reserve a Slot in Calendar";
        $activeClass = "appointments";
        $holidays = UserHoliday::all();

        return view('holidays.index', compact('title', 'subtitle', 'activeClass', 'holidays'));
    }

    public function create()
    {
        $title = "Add New Holiday Slot";
        $subtitle = "Add New Slot";
        $activeClass = "appointments";
        return view('holidays.create', compact('title', 'subtitle', 'activeClass'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $holidays = UserHoliday::create($input);
        if (!$holidays->id)
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured']);

        return response()->json(['status' => 'success', 'message' => 'Holiday Saved!', 'data' => $holidays]);
    }


    public function destroy($id)
    {
        UserHoliday::destroy($id);
        return response()->json(['status' => 'success', 'message' => 'Holiday Deleted!']);
    }
}
