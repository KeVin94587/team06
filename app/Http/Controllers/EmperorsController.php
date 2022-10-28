<?php

namespace App\Http\Controllers;
use App\Models\Emperor;
use Illuminate\Http\Request;

class EmperorsController extends Controller
{
    public function index()
    {
        
        $emperors = Emperor::all();
        return view('emperors.index', ['emperors' => $emperors]);
    }
    /*public function index()
    {
        $emperors = Emperor::all();
        $positions = Emperor::allPositions()->get();
        $data = [];
        foreach ($positions as $position)
        {
            $data["$positions -> position"] = $position -> position;
        }
        return view('emperors.index', ['emperors' => $emperors, 'positions'=>$data]);
    }*/
}
