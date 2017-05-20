<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevUpdatesController extends Controller
{

    public function index()
    {
        $updates = DevUpdate::all()->sortByDesc('created_at');
        return view('devupdates.index', compact('updates'));
    }

    public function create()
    {
        return view('devupdates.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $input['creator'] = Auth::user()->name;

        $update = DevUpdate::create($input);

        if ($update->id) {
            return response()->json(['status' => 'success', 'message' => 'Atualização registrada com successo!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);
        }
    }

}
