<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockControlController extends Controller
{

    public function index()
    {
        $title = "Controle de Estoque";
        $subtitle = 'Todas informações do seu relacionadas ao seu estoque';
        $activeClass = "stockcontrol";
        // TODO: filter by clinic
        $items = Item::all();

        return view('stockcontrol.index', compact('title', 'subtitle', 'items', 'activeClass'));
    }

    public function create()
    {
        // TODO: item type -> front end also
        $title = "Cadastrar novo Item";
        $subtitle = "Preencher informações do cadastro do item";
        $activeClass = "stockcontrol";
        return view('stockcontrol.create', compact('title', 'subtitle', 'activeClass'));
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
        $title = "Cadastro de Item";
        $subtitle = 'Informações do item';
        $activeClass = "stockcontrol";
        // getting users
        $item = Item::find($id);
        // getting all roles
        return view('stockcontrol.edit', compact('title', 'subtitle', 'activeClass', 'item'));
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

    public function quoteItems()
    {
        $title = "Quotação de Compras";
        $subtitle = 'Criar um relatório de quotação customizado';
        $activeClass = "stockcontrol";

        $items = Item::all();
        // TODO: implement contacts
        $contacts = [];// ItemContact::all();

        return view('stockcontrol.quoteitems', compact('title', 'subtitle', 'activeClass', 'items', 'contacts'));
    }

    public function updateStock(Request $request, $id)
    {
        $stock = Item::find($id);
        if ($stock->id) {
            if ($request->action == 'add') {
                $stock->quantity = $stock->quantity + $request->quantity;
            } else {
                $stock->quantity = $stock->quantity - $request->quantity;
            }

            // checking stock quantity
            if ($stock->quantity > 0) {
                $stock->save();

                // updating stock history
                $input = $request->all();
                $input['item_id'] = $stock->id;
                $stockHistory = StockHistory::create($input);

                return response()->json(['status' => 'success', 'message' => 'Estoque Atualizado!']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Occoreu Algum Problema!']);
            }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Occoreu Algum Problema!']);
        }
    }

    public function getItemHistory($id)
    {
        $history = StockHistory::where('item_id', '=', $id)->get();
        $count = StockHistory::where('item_id', '=', $id)->count();
        if ($count > 0) {
            $i = 0;
            foreach ($history as $data) {
                $history[$i]->item = $data->item;
                $i++;
            }
            return response()->json(['status' => 'success', 'message' => 'Sucesso', 'data' => $history]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Item Sem Hístorico!']);
        }
    }

    public function upload($file, $id)
    {
        // getting all of the post data
        $destinationPath = 'uploads/' . $id; // upload path
        if (!file_exists('uploads/' . $id)) {
            mkdir('uploads/' . $id, 0755, true);
        }
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $file->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
        return 'uploads/' . $id . "/" . $fileName;
    }

}
