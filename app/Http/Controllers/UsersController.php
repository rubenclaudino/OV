<?php

namespace App\Http\Controllers;

use App\City;
use App\Clinic;
use App\Http\Requests\UserValidationRequest;
use App\Permission;
use App\Role;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $clinics = Clinic::pluck('name', 'id');
        $roles = Role::pluck('display_name', 'id');
        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');

        return view('users.create', compact('user', 'clinics', 'states', 'cities', 'roles'));
    }

    public function store(UserValidationRequest $request)
    {
        $user = User::create($request->except('password_confirmation'));
        $user->roles()->sync($request->roles);
        return redirect('users')->with('status', 'User Created!');
    }

    public function show(User $user)
    {
        $clinics = Clinic::pluck('name', 'id');
        $roles = Role::pluck('display_name', 'id');
        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        return view('users.show', compact('user', 'clinics', 'states', 'cities', 'roles'));
    }

    public function edit(User $user)
    {
        $clinics = Clinic::pluck('name', 'id');
        $roles = Role::pluck('display_name', 'id');
        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        return view('users.edit', compact('user', 'clinics', 'states', 'cities', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        if ($request->has('password'))
            $user->update($request->except('password_confirmation'));
        else
            $user->update($request->except('password', 'password_confirmation'));

        $user->roles()->sync($request->roles);
        return redirect('users')->with('status', 'User Updated!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('users')->with('status', 'User Deleted!');
    }

    /**
     * GENERATE INVOICES
     */
    public function invoices()
    {
        $title = "User Invoices";
        $subtitle = "Download All User Invoices";
        $activeClass = "users";

        $user = Auth::user();
        //$invoices = $user->invoices();
        return view('users.invoices', compact('title', 'subtitle', 'invoices', 'activeClass'));
    }

    public function permission()
    {
        $array = array(
            array('Show All Users', 'userscontroller.index', 'User', 'Show All Users'),
            array('Create New User', 'userscontroller.create', 'User', 'Create New User'),
            array('Manage Users', 'userscontroller.manage', 'User', 'Manage Users'),
        );

        // checking
        foreach ($array as $data) {
            $count = Permission::where('slug', $data[1])->count();
            if ($count == '0') {
                // adding permission
                Permission::create([
                    'name' => $data[0],
                    'slug' => $data[1],
                    'model' => $data[2],
                    'description' => $data[3],
                ]);
            }
        }
        exit;
    }

}
