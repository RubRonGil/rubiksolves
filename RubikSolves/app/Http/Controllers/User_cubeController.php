<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_cube;

class User_cubeController extends Controller
{
    public function index()
    {
        return User_cube::all();
    }
 
    public function show($id)
    {
        return User_cube::find($id);
    }

    public function store(Request $request)
    {
        $user_cube = User_cube::create($request->all());
        return response()->json($user_cube, 201);
    }

    public function update(Request $request, $id)
    {
        $user_cube = User_cube::findOrFail($id);
        $user_cube->update($request->all());

        return $user_cube;
    }

    public function destroy(Request $request, $id)
    {
        $user_cube = User_cube::findOrFail($id);
        $user_cube->delete();

        return response()->json(null, 204);
    }
}
