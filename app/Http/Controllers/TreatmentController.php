<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TreatmentType;
use App\Patient;
use App\Appointment;
use App\Treatment;
use App\Payment;
use App\Clinic;
use Auth;
use App\DentalPlan;

class TreatmentController extends Controller
{

    public function index()
    {
        $title = "Treatments";
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
                $u = Treatment::create([
                    'treatment_type_id' => $request->treatment_type_id,
                    'patient_id' => $request->patient_id,
                    'start_date' => date('Y-m-d'),
                    'dentist_id' => $request->dentist_id,
                    'appointment_id' => $request->appointment_id,
                    'observation' => $request->observation,
                    'patient_id' => $request->patient_id,
                    'payment_id' => $payment->id,
                ]);

                if ($u->id) {
                    $treatments = $this->getPatientTreatment($request);
                    return $treatments;
                }
            }
        } else {
            return "error";
        }
    }

    public function show($id)
    {
        $treatment = Treatment::find($id);
        if ($treatment->id) {
            $treatment->payment = $treatment->payment;
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
        $treatment = Treatment::find($id);
        if ($treatment->id) {
            $input = $request->all();
            $treatment->fill($input)->save();

            $payment = Payment::find($id);
            $payment->fill($input)->save();

            $request->appointment_id = $treatment->appointment_id;
            $treatments = $this->getPatientTreatment($request);

            return $treatments;
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function destroy($id)
    {
        $treatment = Treatment::find($id);

        if ($treatment->id) {
            $treatment->delete();
            return response()->json(['status' => 'success', 'message' => 'Treatment Deleted!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    /**
     * TREATMENT TYPES
     */
    public function treatmentTypes()
    {
        $title = "Treatment Type";
        $subtitle = "Treatment Types List";
        $activeClass = "treatments";
        $types = TreatmentType::all();
        $dental_plans = DentalPlan::pluck('title', 'id');
        return view('treatments.types', compact('title', 'subtitle', 'activeClass', 'types', 'dental_plans'));
    }

    public function addTreatmentTypes(Request $request)
    {
        $type = TreatmentType::create([
            'title' => $request->title,
            'price' => $request->price,
        ]);
        if ($type) {
            return response()->json(['status' => 'success', 'message' => 'Treatment Type Added!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    /**
     * GETTING TREATMENT OF PATIENT
     */
    public function getPatientTreatment(Request $request)
    {
        $treatments = Treatment::where('appointment_id', '=', $request->appointment_id)->get();
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
