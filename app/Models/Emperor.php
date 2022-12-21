<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emperor extends Model
{
    use HasFactory;
    protected $fillable=[
        'emperor_name',
        'dynasty_id',
        'emperor_life',
        'emperor_start_year',
        'emperor_end_year',
        'created_at',
        'updated_at',
    ];
    public function dynasty()
    {
        return $this->belongsTo("App\Models\Dynasty",'dynasty_id','id');
    }

    public function scopeSenior($query)
    {
        $query->where('emperor_life', '>=', 50)->orderBy('emperor_life');
    }

    public function scopeBCStartYear($query)
    {
        $query->where('emperor_start_year', '<=', 1)->orderBy('emperor_start_year');
    }

    public function scopeACStartYear($query)
    {
        $query->where('emperor_start_year', '>=', 1)->orderBy('emperor_start_year');
    }
}
