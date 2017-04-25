<?php

namespace App\Http\Controllers;

use App\PatientExams;
use App\Dentist;
use App\ReportModels;
use Illuminate\Http\Request;

class PatientExamsController extends Controller
{

    public function show($id)
    {
        $model = PatientExams::find($id);
        if ($model->id) {
            return response()->json(['status' => 'success', 'message' => $model]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Some Error Occured!"]);
        }
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $exam = PatientExams::create($input);
        if ($exam->id) {
            // getting exams
            $examContent = PatientExams::where('appointment_id', '=', $request->appointment_id)->get();
            $i = 0;
            foreach ($examContent as $data) {
                $dentist_name = Dentist::where('user_id', '=', $data->dentist_id)->first();
                $model = ReportModels::find($data->model_id);
                $examContent[$i]->dentist_name = $dentist_name;
                $examContent[$i]->model = $model;
                $i++;
            }


            return response()->json(['status' => 'success', 'message' => $examContent]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    /**
     * GETTING EXAMS
     */
    public function getExams(Request $request)
    {
        $examContent = PatientExams::where('appointment_id', '=', $request->appointment_id)->get();
        $count = PatientExams::where('appointment_id', '=', $request->appointment_id)->count();
        if ($count > 0) {

            $i = 0;
            foreach ($examContent as $data) {
                $dentist_name = Dentist::where('user_id', '=', $data->dentist_id)->first();
                $model = ReportModels::find($data->model_id);
                $examContent[$i]->dentist_name = $dentist_name;
                $examContent[$i]->model = $model;
                $i++;
            }

            return response()->json(['status' => 'success', 'message' => $examContent]);
        } else {
            //return response()->json(['status'=>'error','message' => 'Some Error Occured!']);
        }
    }

    public function destroy($id)
    {
        $exams = PatientExams::findOrFail($id);
        if ($exams->delete()) {
            return response()->json(['status' => 'success', 'message' => "Exam Deleted!"]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function update(Request $request, $id)
    {
        $exam = PatientExams::find($id);
        if ($exam->id) {
            $input = $request->all();
            $exam->fill($input)->save();
            $examContent = PatientExams::where('appointment_id', '=', $request->appointment_id)->get();
            $i = 0;
            foreach ($examContent as $data) {
                $dentist_name = Dentist::where('user_id', '=', $data->dentist_id)->first();
                $model = ReportModels::find($data->model_id);
                $examContent[$i]->dentist_name = $dentist_name;
                $examContent[$i]->model = $model;
                $i++;
            }
            return response()->json(['status' => 'success', 'message' => $examContent]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

}
