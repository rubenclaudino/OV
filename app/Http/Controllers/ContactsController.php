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
        $title = "Contatos";
        $subtitle = 'Lista de contatos';
        $activeClass = "contacts";

        if (Auth::user()->isAdmin())
            $contatos = ContactEntity::all()->sortByDesc('name');
        else {
            $contatos = ContactEntity::where('clinic_id', Auth::user()->clinic_id)
                ->where('user_id',  Auth::user()->id)
                ->orwhere('is_public',  true)
                ->get()
                ->sortByDesc('name');
        }

        return view('contacts.index', compact('title', 'subtitle', 'activeClass', 'contatos'));
    }

    public function create()
    {
        $title = "Contato";
        $subtitle = "Cadastrar novo contato";
        $activeClass = "contacts";

        $cities = City::pluck('name', 'id');
        $states = State::pluck('abb', 'id');

        return view('contacts.create', compact('title', 'subtitle', 'activeClass', 'cities', 'states'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['clinic_id'] = Auth::user()->clinic_id;
        $input['user_id'] = Auth::user()->id;

        $contato = ContactEntity::create($input);

        if ($contato->id)
            return response()->json(['status' => 'success', 'message' => 'Cadastrado com sucesso!']);

        return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro!']);

    }

    public function edit($id)
    {
        $title = "Contato";
        $subtitle = 'Editar informações do contato';
        $activeClass = "contacts";

        $cities = City::pluck('name', 'id');
        $states = State::pluck('abb', 'id');

        $contact = ContactEntity::find($id);

        return view('contacts.edit', compact('title', 'subtitle', 'activeClass', 'contact', 'cities', 'states'));
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
