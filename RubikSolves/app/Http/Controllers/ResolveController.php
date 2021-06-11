<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resolve;

class ResolveController extends Controller
{
    public function index()
    {
        return Resolve::all();
    }
 
    public function show($id)
    {
        return Resolve::find($id);
    }

    public function store(Request $request)
    {
        $resolve = Resolve::create($request->all());
        return response()->json($resolve, 201);
    }

    public function update(Request $request, $id)
    {
        $resolve = Resolve::findOrFail($id);
        $resolve->update($request->all());

        return $resolve;
    }

    public function destroy(Request $request, $id)
    {
        $resolve = Resolve::findOrFail($id);
        $resolve->delete();

        return response()->json(null, 204);
    }
}
