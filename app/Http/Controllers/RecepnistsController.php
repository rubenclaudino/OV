<?php

namespace App\Http\Controllers;

use App\City;
use App\Clinic;
use App\Role;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class RecepnistsController extends Controller
{

    public function index()
    {
        $title = "Recepnists";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "recepnists";
        $subtitle = "Informações detalhadas de todos tratamentos";

        // TODO: filter by clinic if not admin
        $users = Role::where('name', 'Receptionist')->first()->users()->get();

        return view('recepnists.index', compact('title', 'subtitle', 'users', 'activeClass'));
    }

    public function create()
    {
        $title = "Add New Recepnist";
        $subtitle = "Add New Recepnist By Dentist Admin";
        $activeClass = "recepnists";

        $cities = City::pluck('name', 'id');
        $states = State::pluck('name', 'id');
        $clinics = Clinic::pluck('name', 'id');

        return view('recepnists.create', compact('title', 'subtitle', 'activeClass', 'clinics', 'states', 'borough', 'cities'));
    }

    public function store(Request $request)
    {
        // TODO: clinic id setup
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'This email is already in use!']);
        }

        $user = User::create($request->except('password_confirmation'));
        $user->roles()->attach(Role::where('name', 'Receptionist')->get());

        return response()->json(['status' => 'success', 'message' => 'Recepnist Added.']);
    }

    public function edit($id)
    {
        $title = "Edit Recepnist";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "recepnists";

        $recepnist = User::find($id);

        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');

        return view('recepnists.edit', compact('title', 'subtitle', 'dentist', 'activeClass', 'recepnist', 'states', 'cities'));
    }

    public function update(Request $request, $id)
    {
        User::find($id)->update($request->except('password_confirmation'));
        return response()->json(['status' => 'success', 'message' => 'Recepnist Updated!']);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['status' => 'success', 'message' => 'Recepnist Deleted!']);
    }

}
