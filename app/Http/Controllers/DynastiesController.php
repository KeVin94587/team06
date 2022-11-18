<?php

namespace App\Http\Controllers;
use App\Models\Dynasty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DynastiesController extends Controller
{
    public function index()
    {
        
        $dynasties = Dynasty::all();
        return view('dynasties.index', ['dynasties' => $dynasties]);
    }
    
    public function show($id)
    {
        $dynasty = Dynasty::findOrFail($id);
        return view('dynasties.show', ['dynasties' => $dynasty]);    
    }

    public function destroy($id)
    {
        $dynasty = Dynasty::findOrFail($id);
        $dynasty->delete();
        return redirect('dynasties');
    }

    public function create()
    {
        return view('dynasties.create');
    }
}

