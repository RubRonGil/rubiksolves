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

    public function userCubes(){
        // $id = Auth::user()->id; 
        // $cubos = DB::select('SELECT uc.*, ct.name AS tipo FROM user_cubes uc JOIN cube_types ct ON uc.cube_type_id = ct.id WHERE uc.user_id = ?', [$id]);
        // return response()->json($cubos, 404);

        return 'hola';
    }
}
