<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class MarkController extends Controller
{
    public function index()
    {
        return Mark::all();
    }
 
    public function show($id)
    {
        return Mark::find($id);
    }

    public function store(Request $request)
    {
        $mark = Mark::create($request->all());
        return response()->json($mark, 201);
    }

    public function update(Request $request, $id)
    {
        $mark = Mark::findOrFail($id);
        $mark->update($request->all());

        return $mark;
    }

    public function destroy(Request $request, $id)
    {
        $mark = Mark::findOrFail($id);
        $mark->delete();

        return response()->json(null, 204);
    }
}
