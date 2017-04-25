<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Role;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class DentistsController extends Controller
{

    public function index()
    {
        $title = "Users";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "dentists";

        // TODO: filter by clinic if not admin
        $users = Role::where('name', 'Dentist')->first()->users()->get();

        return view('dentists.index', compact('title', 'subtitle', 'users', 'activeClass'));
    }

    public function create()
    {
        $title = "Cadastrar Usuário";
        $subtitle = "Informações do usuário";
        $activeClass = "dentists";
        $clinics = Clinic::pluck('name', 'id');

        return view('dentists.create', compact('title', 'subtitle', 'activeClass', 'clinics'));
    }

    public function store(Request $request)
    {
        // TODO: clinic id setup
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails())
            return response()->json(['status' => 'error', 'message' => 'Já existe esse email cadastrado no nosso sistema!']);

        if (!$request->has('clinic_id'))
            $request->clinic_id = Auth::user()->clinic_id;

        $dentist = User::create($request->except('role', 'password_confirmation'));
        $dentist->roles()->attach(Role::where('name', 'Dentist')->first());

        // TODO: front end doesn't have this capability yet
        if ($request->has('dentistadmin'))
            $dentist->roles()->attach(Role::where('name', 'Local Admin')->first());

        return response()->json(['status' => 'success', 'message' => 'Usuário cadastrado com sucesso!']);
    }

    public function show($id)
    {
        $title = "User Profile";
        $subtitle = "Show User Profile";
        $activeClass = "dentists";
        $dentist = User::find($id);
        return view('dentists.show', compact('title', 'subtitle', 'activeClass', 'dentist'));
    }

    public function edit($id)
    {
        $title = "Edit User";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "dentists";

        $clinics = Clinic::pluck('name', 'id');
        $dentist = User::find($id);

        return view('dentists.edit', compact('title', 'subtitle', 'dentist', 'activeClass', 'clinics'));
    }

    public function update(Request $request, $id)
    {
        User::find($id)->update($request->except('role', 'password_confirmation'));
        return response()->json(['status' => 'success', 'message' => 'User Added!']);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return "success";
    }

}
