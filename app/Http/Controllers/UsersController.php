<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function index()
    {
        $title = "Usuários";
        $subtitle = '';
        $activeClass = "users";
        $subtitle = "";

        $users = User::all();

        return view('users.index', compact('title', 'subtitle', 'users', 'activeClass'));
    }

    public function create()
    {
        $title = "Usuário";
        $subtitle = "Cadastrar um novo usuário";
        $activeClass = "users";

        $clinics = Clinic::pluck('name', 'id');

        return view('users.create', compact('title', 'subtitle', 'activeClass', 'clinics'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'clinic_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('users/create')
                ->withErrors($validator)
                ->withInput();
        } else {

            // adding dentist
            $clinic = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'clinic_id' => $request->clinic_id,
                'password' => bcrypt($request->password),
            ]);

            $user = User::find($clinic->id);
            $user->attachRole('2');

            return redirect('users/create')
                ->with('status', 'Dentist Admin Created!');
        }
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
        User::destroy($id);
        return response()->json(['status' => 'success', 'message' => "User Deleted!"]);
    }

    public function profile()
    {
        $user = Auth::user();

        $title = "User Profile";
        $subtitle = "";
        $activeClass = "";
        $subtitle = "";

        return view('users.profile.index', compact('title', 'subtitle', 'user', 'activeClass'));
    }

    public function userDetails()
    {
        $user = Clinic::where('id', '=', Auth::user()->clinic_id)->first();
        return $user;
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

    /**
     * MANAGE ALL USERS AS PER CLINIC
     */
    public function manage()
    {
        $title = "Manage Clinic User";
        $subtitle = "All the clinic User List";
        $activeClass = "users_management";

        // get all users
        $users = User::where('clinic_id', Auth::user()->clinic_id)->with('roles')->get();
        /* $users = User::where([['clinic_id', '=', Auth::user()->clinic_id], ['role_id', '>', '1']])
             ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
             ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
             ->select('users.*', 'roles.name AS rolename', 'roles.*', 'users.name AS username')
             ->orderBy('roles.slug', 'ASC')
             ->whereNotIn('users.id', array(Auth::user()->id))
             ->get();*/

        $i = 0;
        foreach ($users as $data) {
            // if($users[$i]->hasRole('dentist')){
            //    $dentist = Dentist::where('user_id','=',$data->id)->first();
            //    $users[$i]->profile_url =$dentist->profile_url;
            // }
            // if($users[$i]->hasRole('patient')){
            //    $patient = Patient::where('user_id','=',$data->id)->first();
            //    $users[$i]->profile_url =$patient->profile_url;
            // }
            // if($users[$i]->hasRole('receptionist')){
            //    $r = Receptionist::where('user_id','=',$data->id)->first();
            //    $users[$i]->profile_url =$r->profile_url;
            // }
            $i++;
        }

        return view('users.manage', compact('title', 'subtitle', 'users', 'activeClass'));
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
