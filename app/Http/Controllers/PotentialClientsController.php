<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PotentialClient;
use DB;
use Auth;
use Validator;
use App\Address;
use App\Contact;

class PotentialClientsController extends Controller
{

    public function index()
    {
        $title = "Lista de Potenciais Clientes";
        $subtitle = '';
        $activeClass = "potentialclients";

        $clients = PotentialClient::all();

        return view('potentialclients.index', compact('title', 'subtitle', 'clients', 'activeClass'));
    }

    public function create()
    {
        $title = "Cliente";
        $subtitle = "Cadastrar um cliente";
        $activeClass = "potentialclients";

        return view('potentialclients.create', compact('title', 'subtitle', 'activeClass'));
    }

    public function store(Request $request)
    {
            $input = $request->all();

            $input['created_by'] = Auth::user()->name;

            $client = PotentialClient::create($input);

            $address = Address::create($input);
            $contact = Contact::create($input);

            if ($contact) {
                $client = $client::find($client->id);
                $client->contact_id = $contact->id;
                $client->save();
            }

            if ($address) {
                $client = $client::find($client->id);
                $client->address_id = $address->id;
                $client->save();
            }

            // getting client
            $p = PotentialClient::find($client->id);
            $p->contact = Contact::find($p->contact_id);
            $p->address = Address::find($p->address_id);

            if ($client->id) {
                return response()->json(['status' => 'success', 'message' => 'Cliente Registrado com successo!']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Some Error Occured']);
            }
    }

    public function edit($id)
    {
        $title    = 'Cliente';
        $subtitle = 'Editar cadastro do cliente';
        $activeClass = "potentialclients";

        $client = PotentialClient::find($id);

        $client = PotentialClient::find($client->id);
        $client->contact = Contact::find($client->contact_id);
        $client->address = Address::find($client->address_id);

        return view('potentialclients.edit', compact('title','subtitle','activeClass','client'));
    }

    public function update(Request $request, $id)
    {
        $client = PotentialClient::find($id);
        $input = $request->all();

        $client->fill($input)->save();

        if ($client) {

            $contact = Contact::find($client->contact->id);
            $contact->fill($input)->save();

            $address = Address::find($client->address->id);
            $address->fill($input)->save();

            return response()->json(['status' => 'success', 'message' => 'Cadastro atualizado com successo!']);
        }
        else
        {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);
        }
    }

    public function show($id)
    {
        $title = "";
        $subtitle = '';
        $activeClass = "potentialclients";

        $client = PotentialClient::find($id);

        return view('potentialclients.show', compact('title', 'subtitle', 'client', 'activeClass'));
    }

    public function newclients()
    {
        $title = "Timeline de Potenciais Clientes";
        $subtitle = "Vejá em ordem de mais recente os clientes cadastrados.";
        $activeClass = "potentialclients";

        $clients = PotentialClient::all()->sortByDesc('created_at');

        return view('potentialclients.newclients', compact('title', 'subtitle', 'clients', 'activeClass'));
    }

}
