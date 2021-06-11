<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    
    /**
     * Relación M-1 Con Resolve
     */
    public function resolve(){
        return $this->belongsTo('App\Models\Resolve');
    }

    
    /**
     * Relación M-1 Con User_cube
     */
    public function user(){
        return $this->belongsTo('App\Models\User_cube');
    }
}
