<?php

namespace App\Http\Controllers;

use App\Models\Dynasty;
use App\Models\Emperor;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request;

class EmperorsController extends Controller
{
    public function store()
    {
        $input = Request::all();
        Emperor::create($input);
        return redirect('emperors');
    }
    public function index()
    {
        
        $emperors = Emperor::all();
        return view('emperors.index', ['emperors' => $emperors]);
    }
    
    public function show($id)
    {
        $emperor = Emperor::findOrFail($id);
        return view('emperors.show', ['emperors' => $emperor]);    
    }

    public function destroy($id)
    {
        $emperor = Emperor::findOrFail($id);
        $emperor->delete();
        return redirect('emperors');
    }

    public function create()
    {

        $dynasties = DB::table('dynasties')
            ->select('dynasties.id', 'dynasties.dynasty_name')
            ->orderBy('dynasties.id', 'asc')
            ->get();

        $data = [];
        foreach($dynasties as $dynasty)
        {
            $data[$dynasty->id] = $dynasty->dynasty_name;
        }
        return view('emperors.create' , ['dynasties' =>$data]);
    }
}
