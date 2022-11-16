<?php

namespace App\Http\Controllers;

use App\Models\Dynasty;
use App\Models\Emperor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmperorsController extends Controller
{
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
        $emperors = DB::table('emperors')
            ->select('emperors.id', 'emperors.emperor_name')
            ->orderBy('emperors.id', 'asc')
            ->get();

        $data = [];
        foreach($emperors as $emperor)
        {
            $data[$emperor->id] = $emperor->emperor_name;
        }
        return view('emperors.create' , ['emperors' =>$data]);
    }
}
