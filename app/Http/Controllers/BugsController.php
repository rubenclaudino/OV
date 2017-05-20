<?php

namespace App\Http\Controllers;

use App\Bug;
use App\Http\Requests\BugValidationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BugsController extends Controller
{

    public function index()
    {
        $bugs = Bug::all()->sortByDesc('report');
        return view('bugs.index', compact('bugs'));
    }

    public function store(BugValidationRequest $request)
    {
        $request['user'] = Auth::user()->first_name;
        Bug::create($request->all());
        return redirect()->back()->with(
            [
                'alert-type' => 'success',
                'message' => 'Bug Created!'
            ]);
    }

    public function edit($id)
    {
        $bugs = Bug::find($id);

        return view('bugs.edit', compact('activeClass', 'bugs'));
    }

    public function update(BugValidationRequest $request, $id)
    {
        Bug::find($id)->update($request->all());
        return redirect()->back()->with(
            [
                'alert-type' => 'success',
                'message' => 'Bug Updated!'
            ]);
    }

    public function destroy($id)
    {
        Bug::destroy($id);
        return redirect()->back()->with(
            [
                'alert-type' => 'success',
                'message' => 'Relato excluído com sucesso!'
            ]);
    }

}
