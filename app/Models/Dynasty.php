<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dynasty extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'dynasty_name',
        'dynasty_start_year',
        'dynasty_end_year',
        'created_at',
        'updated_at',
    ];
    public function emperors()
    {
        return $this->hasMany('App\Models\Emperor','dynasty_id');
    }

    public function delete()
    {
        $this->emperors()->delete();
        return parent::delete();
    }

}
