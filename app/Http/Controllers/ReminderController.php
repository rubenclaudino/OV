<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{

    public function index()
    {
        $title = "Lembretes";
        $subtitle = 'Lembretes criados por você e parâ você';
        $activeClass = "reminders";

        /*$myReminders = ReminderUsers::where([['user_id', '=', Auth::user()->id], ['status', '=', '1']])->get();
        $reminders = Reminder::where([['user_id', '=', Auth::user()->id], ['status', '=', '1']])->get();
        $creminders = Reminder::where([['user_id', '=', Auth::user()->id], ['status', '=', '0']])->get();*/

        $users = User::where('clinic_id', Auth::user()->clinic_id)->get()->pluck('name', 'id')->toArray();

        /*unset($users[Auth::user()->id]);
        $users = array(Auth::user()->id => 'Me') + $users;*/

        return view('reminders.index', compact('title', 'subtitle', 'reminders', 'activeClass', 'users', 'creminders', 'myReminders'));
    }

    public function create()
    {
        $title = "Add New Reminder";
        $subtitle = "Add New Reminder User";
        $activeClass = "reminders";

        return view('reminders.create', compact('title', 'subtitle', 'activeClass'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $to_userid = $input['to_user_id'];
        if (is_array($to_userid)) {
            unset($input['to_user_id']);
            $reminder = Reminder::create($input);

            for ($i = 0; $i < count($to_userid); $i++) {
                $input['reminder_id'] = $reminder->id;
                $input['from_user_id'] = Auth::user()->id;
                $input['user_id'] = $to_userid[$i];

                $reminderUser = ReminderUsers::create($input);
            }
        } else {
            $reminder = Reminder::create($input);
            $input['user_id'] = $to_userid;
            $input['reminder_id'] = $reminder->id;
            $input['from_user_id'] = Auth::user()->id;
            $reminderUser = ReminderUsers::create($input);
        }

        // getting current reminder

        $reminder = Reminder::find($reminder->id);
        $i = 0;
        foreach ($reminder as $data) {
            $reminder->reminderUser = $reminder->reminderUser;
            $i = 0;
            foreach ($reminder->reminderUser as $d) {
                $reminder->reminderUser[$i]->user = $d->user;
                $i++;
            }
        }
        if ($reminder->id) {
            return response()->json(['status' => 'success', 'message' => 'Reminder Added!', 'data' => $reminder]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = "Edit Reminder";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "reminders";
        // getting users
        $reminder = Reminder::find($id);
        // getting all roles
        return view('reminders.edit', compact('title', 'subtitle', 'activeClass', 'reminder'));
    }

    public function update(Request $request, $id)
    {
        $reminder = Reminder::find($id);
        if ($reminder->id) {
            $input = $request->all();
            $reminder->fill($input)->save();

            return response()->json(['status' => 'success', 'message' => 'Reminder Updated!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $reminder = Reminder::find($id);
        if ($reminder->id) {
            $input = $request->all();
            $input['status'] = '0';
            $reminder->fill($input)->save();

            $reminderUsers = DB::table('reminder_users')->where('reminder_id', $reminder->id)->update(['status' => '0']);
            return response()->json(['status' => 'success', 'message' => 'Reminder Updated!', 'data' => $reminder]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function unmarkReminder(Request $request, $id)
    {
        $reminder = Reminder::find($id);
        if ($reminder->id) {
            $input = $request->all();
            $input['status'] = '1';
            $reminder->fill($input)->save();

            return response()->json(['status' => 'success', 'message' => 'Reminder Updated!', 'data' => $reminder]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function updateReminderUserStatus(Request $request, $id)
    {
        $reminder = ReminderUsers::find($id);
        if ($reminder->id) {
            $input = $request->all();
            $input['status'] = '0';
            $reminder->fill($input)->save();


            return response()->json(['status' => 'success', 'message' => 'Reminder Updated!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function destroy($id)
    {
        $reminder = Reminder::find($id);
        if ($reminder->id) {
            $reminder->delete();
            $reminderUser = ReminderUsers::where('reminder_id', '=', $reminder->id)->delete();

            return response()->json(['status' => 'success', 'message' => 'Reminder Deleted!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured']);
        }
    }

}
