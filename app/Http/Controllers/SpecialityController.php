<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;

class SpecialityController extends Controller
{

    public function index()
    {
        $title = "Especialidades";
        $subtitle = 'Todas especialidades cadastradas';
        $activeClass = "treatmenttypes";

        // getting specialiities
        $items = Specialty::all();

        // getting all roles
        return view('specialities.index', compact('title', 'subtitle', 'activeClass', 'specialities'));
    }

    public function create()
    {
        $title = "Especialidades";
        $subtitle = "Novo Item";
        $activeClass = "treatmenttypes";

        return view('specialities.create', compact('title', 'subtitle', 'activeClass'));
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
        $title = "Especialidade";
        $subtitle = '';
        $activeClass = "treatmenttypes";

        $speciality = Specialty::find($id);
        // getting all roles
        return view('specialities.show', compact('title', 'speciality'));
    }

    public function edit($id)
    {
        $title = "Especialidade";
        $subtitle = "Editar informações relacionadas a especialidade";
        $activeClass = "treatmenttypes";
        //
        $speciality = Specialty::find($id);
        return view('specialities.edit', compact('title', 'subtitle', 'speciality', 'activeClass'));
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
