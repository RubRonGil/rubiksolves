<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolve extends Model
{
    use HasFactory;
    protected $fillable = ['user_cube_id', 'avg_time'];

    /**
     * Relación 1-M con Marks
     */
    public function marks(){
        return $this->hasMany('App\Models\Mark');
    }
}
