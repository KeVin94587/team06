<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emperor extends Model
{
    use HasFactory;

    public function dynasty()
    {
        return $this->belongsTo("App\Models\Dynasty",'dynasty_id','id');
    }
}
