<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Carbon\Carbon;
use App\SubscriptionHistory;
use Illuminate\Http\Request;

class UserBillingController extends Controller
{

    public function index()
    {
        return view('billing.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();
        $token = $input['stripeToken'];

        $user = User::find($user->id);
        try {
            $user->newSubscription('main', $input['plan'])->create($token, [
                'email' => $user->email,
            ]);
            // $user->trial_ends_at = Carbon::now()->lastOfMonth();
            // $user->save();

            return back()->with('success', 'Subscription is completed.');
        } catch (Exception $e) {
            return back()->with('success', $e->getMessage());
        }
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

    public function subscribeuser()
    {
        $title = "Subscribe";
        $subtitle = "Todas informações do seu relacionadas ao seu estoque";
        $activeClass = "billing";

        return view('billing.subscribe', compact('title', 'subtitle', 'activeClass'));
    }

}
