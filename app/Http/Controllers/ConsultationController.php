<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Item;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::all();
        return view('consultation.index', compact('consultations'));
    }

    public function create()
    {
        return view('stockcontrol.create');
    }

    public function store(Request $request)
    {
        // TODO: clinic id and item type
        $request['clinic_id'] = 1;
        $request['item_type_id'] = 1;

        $item = Item::create($request->all());

        $url = $this->upload($request->image_url, Auth::user()->clinic_id . "/items");
        $item->image_url = $url;
        $item->save();

        return response()->json(['status' => 'success', 'message' => 'Item Adicionado!']);
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('stockcontrol.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        /*$item = Item::find($id)->update($request->all());
        if ($request->has('image_url')) {
            $url = $this->upload($request->image_url, Auth::user()->clinic_id . "/items");
            $item->image_url = $url;
            $item->save();
        }
        */
        $item = Item::find($id);
        if ($item->id) {
            $input = $request->all();

            // deleting item
            // unlink($item->image_url);

            if (isset($input['image_url'])) {
                if (!file_exists('uploads/' . Auth::user()->clinic_id)) {
                    mkdir('uploads/' . Auth::user()->clinic_id, 0755, true);
                }
                if (!file_exists('uploads/' . Auth::user()->clinic_id . "/items/")) {
                    mkdir('uploads/' . Auth::user()->clinic_id . "/items", 0755, true);
                }
                $url = $this->upload($input['image_url'], Auth::user()->clinic_id . "/items");
                $item->image_url = $url;
                $item->save();
            }
            unset($input['image_url']);
            $item->fill($input)->save();
        }

        return response()->json(['status' => 'success', 'message' => 'Item Atualizado!']);
    }

    public function destroy($id)
    {
        Item::destroy($id);
        return response()->json(['status' => 'success', 'message' => 'Item Excluído!']);
    }
}
