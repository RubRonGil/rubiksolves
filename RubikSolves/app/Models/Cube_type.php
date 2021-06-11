<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cube_type extends Model
{
    use HasFactory;
    
    /**
     * Relación 1-M con User_cube
     */
    public function user_cubes(){
        return $this->hasMany('App\Models\User_cube');
    }
    
}
