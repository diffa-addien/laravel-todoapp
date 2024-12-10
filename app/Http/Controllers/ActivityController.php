<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string']);
        $activity = Activity::create(['title' => $request->title, 'user_id' => auth()->id()]);

        return response()->json($activity, 201);
    }

    public function index()
    {
        return response()->json(Activity::where('user_id', auth()->id())->get(), 200);
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $activity->delete();

        return response()->json(['message' => 'Activity deleted'], 200);
    }
}
