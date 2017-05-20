<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\UserHoliday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index()
    {
        $holidays = UserHoliday::where('user_id', Auth::user()->id)->get();

        if (Agenda::where('user_id', Auth::user()->id)->count() > 0) {
            $agenda = Agenda::where('user_id', Auth::user()->id)->first();
            $agenda = json_decode($agenda->settings);
            return view('agenda.settings', compact('title', 'subtitle', 'activeClass', 'agenda', 'holidays'));
        }
        return view('agenda.settings', compact('holidays'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $array = [];
        unset($input['_method']);
        unset($input['_token']);
        $array['settings'] = json_encode($input);
        $array['user_id'] = Auth::user()->id;

        if (Agenda::where('user_id', Auth::user()->id)->count() > 0) {
            $agenda = Agenda::where('user_id', Auth::user()->id)->first();
            $agenda->settings = json_encode($input);
            $agenda->user_id = Auth::user()->id;
            $agenda->save();

            if ($agenda->id)
                return response()->json(['status' => 'success', 'message' => 'Configuração salva com sucesso!']);

            return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);
        }

        $agenda = Agenda::create($array);
        if ($agenda->id)
            return response()->json(['status' => 'success', 'message' => 'Configuração salva com sucesso!']);

        return response()->json(['status' => 'error', 'message' => 'Ocorreu algum erro!']);
    }
}
