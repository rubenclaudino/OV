<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pictogram;

class PictogramController extends Controller
{

    public function store(Request $request)
    {
        if ($request->id != '') {
            // update
            $input = $request->all();
            $pictogram = Pictogram::find($request->id);
            if ($pictogram->id) {
                $pictogram->fill($input)->save();
                return response()->json(['status' => 'success', 'message' => "Updated!"]);
            } else {
                return response()->json(['status' => 'success', 'message' => "Some Error Occured!"]);
            }
        } else {
            $input = $request->all();
            $pictogram = Pictogram::create($input);
            if ($pictogram->id) {
                return response()->json(['status' => 'success', 'message' => $pictogram->id]);
            } else {
                return response()->json(['status' => 'success', 'message' => "Some Error Occured!"]);
            }
        }
    }

    public function getPictogram(Request $request)
    {
        $quotation = Pictogram::where('appointment_id', '=', $request->appointment_id)->get();
        $count = Pictogram::where('appointment_id', '=', $request->appointment_id)->count();
        if ($count > 0) {
            return response()->json(['status' => 'success', 'message' => $quotation]);
        } else {
            //return response()->json(['status'=>'success','message' => $quotation->content]);
        }
    }

    public function destroy($id)
    {
        $pictogram = Pictogram::find($id);
        //$dentist = Dentist::findOrFail($id);
        if ($pictogram->id) {
            $pictogram->delete();
            return response()->json(['status' => 'success', 'message' => "Deleted."]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Some Error Occured!"]);
        }
    }

}
