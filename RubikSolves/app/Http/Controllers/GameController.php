<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Cube_type;
use App\Models\User_cube;
use App\Models\Resolve;
use App\Models\Mark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index(){
         $id = Auth::user()->id; 
         $user_cube_id = DB::select('SELECT id FROM user_cubes WHERE user_id = ?', [$id]);
         $cubos = DB::select('SELECT uc.*, ct.name AS tipo FROM user_cubes uc JOIN cube_types ct ON uc.cube_type_id = ct.id WHERE uc.user_id = ?', [$id]);
         $marks = DB::select('SELECT m.*, uc.name FROM marks m JOIN resolves r ON m.resolve_id = r.id JOIN user_cubes uc ON r.user_cube_id = uc.id WHERE uc.user_id = ?', [$id]);
         $resolves = DB::select('SELECT r.*, uc.name FROM resolves r JOIN user_cubes uc ON r.user_cube_id = uc.id WHERE uc.user_id = ?', [$id]);
     
        return view('tiempos', compact('cubos', 'marks', 'resolves'));
    }

    //PRUEBA

    public function addCubo(Request $request){
        return redirect('/index')->with('alert', 'Cubo añadido');
    }

    public function addResolve(Request $request){
        return redirect('/index')->with('alert', 'Resolución añadida');
    }

    public function addMark(Request $request){
        return redirect('/index')->with('alert', 'Marca añadida');
    }
}
