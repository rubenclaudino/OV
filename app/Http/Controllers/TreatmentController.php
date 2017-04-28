<?php

namespace App\Http\Controllers;

use App\Procedure;
use App\Specialty;
use Illuminate\Http\Request;
use App\Patient;
use App\Appointment;
use App\Payment;
use App\Clinic;
use App\DentalPlan;
use Illuminate\Support\Facades\Auth;

class TreatmentController extends Controller
{

    public function index()
    {
        $title = "Procedures";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "treatments";
        $user = Auth::user();
        $subtitle = "Informações detalhadas de todos tratamentos";
        $pUsers = array();

        $users = Patient::all();

        // getting all roles
        return view('patients.index', compact('title', 'subtitle', 'users', 'activeClass'));
    }

    public function create()
    {
        $title = "Add New Patient";
        $subtitle = "Add New user by Dentist User";
        $activeClass = "patients";

        // getting clinics

        $clinics = Clinic::pluck('name', 'id');
        return view('patients.create', compact('title', 'subtitle', 'activeClass', 'clinics'));
    }

    public function store(Request $request)
    {
        $appointment = Appointment::find($request->appointment_id);

        if ($appointment) {

            // adding payment
            $payment = Payment::create([
                'amount' => $request->price,
                'payment_type' => $request->payment_type,
                'status' => $request->payment_action
            ]);
            if ($payment->id) {
                // adding treatment
                $u = Procedure::create([
                    'treatment_type_id' => $request->treatment_type_id,
                    'patient_id' => $request->patient_id,
                    'start_date' => date('Y-m-d'),
                    'dentist_id' => $request->dentist_id,
                    'appointment_id' => $request->appointment_id,
                    'observation' => $request->observation,
                    'payment_id' => $payment->id,
                ]);

                if ($u->id) {
                    $treatments = $this->getPatientProcedure($request);
                    return $treatments;
                }
            }
        } else {
            return "error";
        }
    }

    public function show($id)
    {
        $treatment = Procedure::find($id);
        if ($treatment->id) {
            return response()->json(['status' => 'success', 'message' => $treatment]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Some Error Occured!"]);
        }
    }

    public function edit($id)
    {
        $title = "Patients";
        $subtitle = 'Informações detalhadas de todos tratamentos';
        $activeClass = "patients";
        $user = Auth::user();
        $subtitle = "Informações detalhadas de todos tratamentos";
        $pUsers = array();

        $dentist = Patient::find($id);

        return view('patients.edit', compact('title', 'subtitle', 'dentist', 'activeClass'));
    }

    public function update(Request $request, $id)
    {
        $treatment = Procedure::find($id);
        if ($treatment->id) {
            $input = $request->all();
            $treatment->fill($input)->save();

            $payment = Payment::find($id);
            $payment->fill($input)->save();

            $request->appointment_id = $treatment->appointment_id;
            $treatments = $this->getPatientProcedure($request);

            return $treatments;
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function destroy($id)
    {
        Procedure::destroy($id);
        return response()->json(['status' => 'success', 'message' => 'Procedure Deleted!']);
    }

    /**
     * TREATMENT TYPES
     */
    public function treatmentTypes()
    {
        $title = "Procedure Type";
        $subtitle = "Procedure Types List";
        $activeClass = "treatments";
        $types = Specialty::all();
        $dental_plans = DentalPlan::pluck('title', 'id');
        return view('treatments.types', compact('title', 'subtitle', 'activeClass', 'types', 'dental_plans'));
    }

    public function addSpecialtys(Request $request)
    {
        $type = Specialty::create([
            'title' => $request->title,
            'price' => $request->price,
        ]);
        if ($type) {
            return response()->json(['status' => 'success', 'message' => 'Procedure Type Added!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    /**
     * GETTING TREATMENT OF PATIENT
     */
    public function getPatientTreatment(Request $request)
    {
        $treatments = Procedure::where('appointment_id', '=', $request->appointment_id)->get();
        $i = 0;
        foreach ($treatments as $data) {
            $treatments[$i]->amount = $data->payment->amount;
            $treatments[$i]->status = $data->payment->status;
            if ($data->payment->payment_type == '0') {
                $treatments[$i]->payment_type = "Cash";
            }
            if ($data->payment->payment_type == '1') {
                $treatments[$i]->payment_type = "Credit";
            }
            if ($data->payment->status == '0') {
                $treatments[$i]->status = "Not Paid";
            }
            if ($data->payment->status == '1') {
                $treatments[$i]->status = "Paid";
            }
            $treatments[$i]->dentist_name = $data->dentist->name;
            $treatments[$i]->treatment_title = $data->treatmentType->title;
            $i++;
        }
        if (!empty($treatments)) {
            return response()->json(['status' => 'success', 'message' => $treatments]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

}
