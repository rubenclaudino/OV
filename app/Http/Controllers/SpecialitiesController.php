<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\Request;

class SpecialitiesController extends Controller
{
    public function index()
    {
       $specialities = Specialty::orderBy('name', 'ASC')->get();
       return view('specialities.index', compact('specialities'));
    }

    public function create()
    {
        $speciality = Specialty::pluck('name', 'id');
        return view('specialities.create', compact('speciality'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Specialty::create($input);

        return redirect('specialities')->with(
            [
                'alert-type' => 'success',
                'message' => 'Especialidade cadastrado com sucesso!'
            ]);
    }

    public function show($id)
    {
        $specialty = Specialty::find($id);
        return view('specialities.show', compact('specialty'));
    }

    public function edit($id)
    {
        $speciality = Specialty::find($id);
        return view('specialities.edit', compact('speciality'));
    }

    public function update(Request $request, $id)
    {
        Specialty::find($id)->update($request->all());

        return redirect('specialities')->with(
            [
                'alert-type' => 'success',
                'message' => 'Especialidade atualizado com sucesso!'
            ]);
    }

}
