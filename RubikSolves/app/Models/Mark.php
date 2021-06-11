<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $fillable = ['resolve_id', 'milisec'];
    
    /**
     * Relación M-1 Con Resolve
     */
    public function resolve(){
        return $this->belongsTo('App\Models\Resolve');
    }

    
}
