<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolve extends Model
{
    use HasFactory;
    protected $fillable = ['user_cube_id', 'avg_time'];

    /**
     * Relación M-1 Con User_cube
     */
    public function user_cube(){
        return $this->belongsTo('App\Models\User_cube');
    }

    /**
     * Relación 1-M con Marks
     */
    public function marks(){
        return $this->hasMany('App\Models\Mark');
    }
}
