<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    public function index()
    {
       $specialties = Specialty::orderBy('name', 'ASC')->get();
       return view('specialties.index', compact('specialties'));
    }

    public function create()
    {
        $speciality = Specialty::pluck('name', 'id');
        return view('specialties.create', compact('speciality'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Specialty::create($input);

        return redirect('specialties')->with(
            [
                'alert-type' => 'success',
                'message' => 'Especialidade cadastrado com sucesso!'
            ]);
    }

    public function show($id)
    {
        $specialty = Specialty::find($id);
        return view('specialties.show', compact('specialty'));
    }

    public function edit($id)
    {
        $speciality = Specialty::find($id);
        return view('specialties.edit', compact('speciality'));
    }

    public function update(Request $request, $id)
    {
        Specialty::find($id)->update($request->all());

        return redirect('specialties')->with(
            [
                'alert-type' => 'success',
                'message' => 'Especialidade atualizado com sucesso!'
            ]);
    }

}
