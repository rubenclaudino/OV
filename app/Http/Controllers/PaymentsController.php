<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{

    public function index()
    {
        $title = "Financeiro";

        $activeClass = "payments";

        $payments = Payment::all();

        return view('payments.index', compact('title', 'payments', 'activeClass'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
