<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ContactEntity;
use App\Contact;
use App\Address;

class ItemContactsController extends Controller
{

    public function index()
    {
        $title = "Contatos";
        $subtitle = 'Lista de contatos';
        $activeClass = "contacts";

        $contatos = ContactEntity::all()->sortByDesc('title');;

        return view('stockcontrol.contacts.index', compact('title', 'subtitle', 'activeClass', 'contatos'));
    }

    public function create()
    {
        $title = "Contato";
        $subtitle = "Cadastrar novo contato";
        $activeClass = "contacts";

        return view('stockcontrol.contacts.create', compact('title', 'subtitle', 'activeClass'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $contato = ContactEntity::create($input);

        $address = Address::create($input);
        $contact = Contact::create($input);

        if ($contact) {
            $contato = $contato::find($contato->id);
            $contato->id_contact = $contact->id;
            $contato->save();
        }

        if ($address) {
            $contato = $contato::find($contato->id);
            $contato->id_address = $address->id;
            $contato->save();
        }

        // getting contact
        $p = ContactEntity::find($contato->id);
        $p->contact = Contact::find($p->id_contact);
        $p->address = Address::find($p->id_address);

        if ($contato->id) {
            return response()->json(['status' => 'success', 'message' => 'Cadastrado com sucesso!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro!']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = "Contato";
        $subtitle = 'Editar informações do contato';
        $activeClass = "contacts";

        $contact = ContactEntity::find($id);
        $contact = ContactEntity::find($contact->id);
        $contact->contact = Contact::find($contact->id_contact);
        $contact->address = Address::find($contact->id_address);

        return view('stockcontrol.contacts.edit', compact('title', 'subtitle', 'activeClass', 'contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactEntity::find($id);

        if ($contact->id) {
            $input = $request->all();
            $contact->fill($input)->save();

            $contact = Contact::find($contact->contact->id);
            $contact->fill($input)->save();

            $address = Address::find($contact->address->id);
            $address->fill($input)->save();

            if ($contact->id) {
                return response()->json(['status' => 'success', 'message' => 'Cadastro atualizado com sucesso!']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro!']);
            }
        }
    }

    public function destroy($id)
    {
        $contact = ContactEntity::find($id);

        if ($contact->id) {
            $contact->delete();
            return response()->json(['status' => 'success', 'message' => 'Cadastro excluído com sucesso!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro']);
        }
    }

}
