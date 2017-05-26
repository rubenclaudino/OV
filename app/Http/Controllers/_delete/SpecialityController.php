<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;

class SpecialityController extends Controller
{

    public function index()
    {
        return view('specialties.index');
    }

    public function create()
    {
        return view('specialties.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $plan = Specialty::create($input);
        if ($plan->id) {
            $speciality = Specialty::find($plan->id);
            return response()->json(['status' => 'success', 'message' => 'Especialidade registrada com sucesso!', 'json' => $speciality]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro!']);
        }
    }

    public function show($id)
    {
        $speciality = Specialty::find($id);
        return view('specialties.show', compact('speciality'));
    }

    public function edit($id)
    {
        $speciality = Specialty::find($id);
        return view('specialties.edit', compact('speciality'));
    }

    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $speciality = Specialty::find($id);
        if ($speciality->id) {
            $speciality->fill($input)->save();
            $items = Specialty::all();
            return response()->json(['status' => 'success', 'message' => "Especialidade atualizada com sucesso!", 'json' => $items]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Ocorreu um erro!"]);
        }
    }

    public function destroy($id)
    {
        $speciality = Specialty::find($id);
        //$dentist = Dentist::findOrFail($id);
        if ($speciality->id) {
            $speciality->delete();
            $items = Specialty::all();

            return response()->json(['status' => 'success', 'message' => "Especialidade excluída com sucesoo!", 'json' => $items]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Ocorreu um erro!"]);
        }
    }

    public function get()
    {
        $items = Specialty::all();
        if ($items) {
            return response()->json(['status' => 'success', 'message' => $items]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro!']);
        }
    }

}
