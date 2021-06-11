<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_cube extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'cube_type_id'];

    /**
     * Relación M-1 Con Users
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Relación M-1 Con Cube_types
     */
    public function cube_types(){
        return $this->belongsTo('App\Models\Cube_type');
    }

    /**
     * Relación 1-M con Mark
     */
    public function resolves(){
        return $this->hasMany('App\Models\Resolve');
    }
}
