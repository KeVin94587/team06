<?php

namespace App\Http\Controllers;

use App\Models\Dynasty;
use App\Models\Emperor;
use Illuminate\Http\Request;

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
}
