<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use App\DevUpdate;

class DevUpdatesController extends Controller
{

    public function index()
    {
        $title = "Atualizações do Sistema";
        $subtitle = "Aqui você pode seguir o progresso de Odontovision ao vivo.";
        $activeClass = "devupdates";

        $updates = DevUpdate::all()->sortByDesc('created_at');

        return view('devupdates.index', compact('title', 'subtitle', 'updates', 'activeClass'));
    }

    public function create()
    {
        $title = "Registrar Atualização";
        $subtitle = "";
        $activeClass = "devupdates";

        return view('devupdates.create', compact('title', 'subtitle', 'activeClass'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $input['creator'] = Auth::user()->name;

        $update = DevUpdate::create($input);

        if ($update->id) {
            return response()->json(['status' => 'success', 'message' => 'Atualização registrada com successo!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);
        }
    }

}
