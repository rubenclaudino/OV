<?php

namespace App\Http\Controllers;

use App\UserHoliday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HolidaysController extends Controller
{

    public function index()
    {
        $holidays = UserHoliday::all();
        return view('holidays.index', compact('holidays'));
    }

    public function create()
    {
        return view('holidays.create');
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
