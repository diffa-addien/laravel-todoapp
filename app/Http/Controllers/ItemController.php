<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'activity_id' => 'required|exists:activities,id',
        ]);

        $item = Item::create([
            'name' => $request->name,
            'activity_id' => $request->activity_id,
        ]);

        return response()->json($item, 201);
    }

    public function index($activityId)
    {
        $items = Item::where('activity_id', $activityId)->get();
        return response()->json($items, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'string|nullable', 'is_done' => 'boolean|nullable']);

        $item = Item::findOrFail($id);
        $item->update($request->only('name', 'is_done'));

        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item deleted'], 200);
    }
}
