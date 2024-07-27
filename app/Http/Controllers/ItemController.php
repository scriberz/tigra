<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function updatePosition(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update(['position' => $request->position]);
        return response()->json(['message' => 'Position updated']);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return response()->json(['message' => 'Item deleted']);
    }
}
