<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Clinic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ClinicController extends Controller
{

    public function index()
    {
        $u = Auth::User();
        $user = User::find($u->id);
        if ($user->isAdmin() || $user->hasPermission('clinic.index')) {
            $clinics = Clinic::all();
            return view('clinic.index', compact('title', 'subtitle', 'activeClass', 'clinics'));
        } else {
            return redirect('/home');
        }
    }

    public function create()
    {
        $user = Auth::User();
        if ($user->isAdmin() || $user->hasPermission('clinic.create')) {
            return view('clinic.create', compact('title', 'subtitle', 'activeClass'));
        } else {
            return redirect('/home');
        }
    }

    public function show(Clinic $clinic)
    {
        return view('clinic.show', compact('clinic'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name'  => 'required',
            'email' => 'required|email|unique:clinics',
        ]);

        if ($validator->fails()) {
            return redirect('clinic/create')->withErrors($validator)->withInput();
        }

        $clinic = Clinic::create($input);
        $image = Input::file('logo');

        if ($image) {
            $url = $this->upload($image, $clinic->id);
            if ($url != '') {
                $c = Clinic::find($clinic->id);
                $c->logo = $url;
                $c->save();
            }
        }
        return redirect('clinic/create')->with('status', 'Clinic Created!');
    }

    public function destroy($id)
    {
        $clinic = Clinic::findOrFail($id);
        if ($clinic->delete()) {
            // deleting directory
            $destinationPath = 'uploads/' . $id; // upload path
            if (file_exists('uploads/' . $id)) {
                rmdir('uploads/' . $id);
            }
            echo "success";
        } else {
            echo "error";
        }
    }

    public function upload($file, $id)
    {
        $destinationPath = 'uploads/' . $id; // upload path
        if (!file_exists('uploads/' . $id)) {
            mkdir('uploads/' . $id, 0755, true);
        }
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111, 99999) . '.' . $extension; // renaming image
        $file->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
        return 'uploads/' . $id . "/" . $fileName;
    }

}
