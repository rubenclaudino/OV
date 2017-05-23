<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ContactEntity;
use App\Contact;
use App\Address;
use App\City;
use App\State;

class ContactsController extends Controller
{

    public function index()
    {
        if (Auth::user()->isAdmin())
            $contatos = ContactEntity::all()->sortByDesc('name');
        else {
            $contatos = ContactEntity::where('clinic_id', Auth::user()->clinic_id)
                ->where('user_id',  Auth::user()->id)
                ->orwhere('is_public',  true)
                ->get()
                ->sortByDesc('name');
        }

        return view('contacts.index', compact('contatos'));
    }

    public function create()
    {
        $cities = City::pluck('name', 'id');
        $states = State::pluck('abbreviation', 'id');
        return view('contacts.create', compact('cities', 'states'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['clinic_id'] = Auth::user()->clinic_id;
        $input['user_id'] = Auth::user()->id;

        $contato = ContactEntity::create($input);

        return redirect('contacts')->with(
            [
                'alert-type' => 'success',
                'message' => 'Contato cadastrado com sucesso!'
            ]);
    }

    public function edit($id)
    {
        $cities = City::pluck('name', 'id');
        $states = State::pluck('abbreviation', 'id');
        $contact = ContactEntity::find($id);
        return view('contacts.edit', compact('contact', 'cities', 'states'));
    }

    public function update(Request $request, $id)
    {
        ContactEntity::find($id)->update($request->all());
        return response()->json(['status' => 'success', 'message' => 'Cadastro atualizado com sucesso!']);
    }

    public function destroy($id)
    {
        ContactEntity::destroy($id);

        return response()->json(['status' => 'success', 'message' => 'Cadastro excluído com sucesso!']);
    }

}
