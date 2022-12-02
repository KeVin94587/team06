<?php

namespace App\Http\Controllers;
use App\Models\Dynasty;
use App\Models\Emperor;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request;
use Symfony\Component\Console\Input\Input;

class DynastiesController extends Controller
{
    public function store()
    {
        $input = Request::all();
        Dynasty::create($input);
        return redirect('dynasties');
    }
    public function index()
    {
        
        $dynasties = Dynasty::all();
        return view('dynasties.index', ['dynasties' => $dynasties]);
    }
    
    public function show($id)
    {
        $dynasty = Dynasty::findOrFail($id);
        $emperors = $dynasty->emperors;
        return view('dynasties.show', ['dynasties' => $dynasty, 'emperors'=>$emperors]);    
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

    public function edit($id)
    {
        $dynasty = Dynasty::findOrFail($id);
        return view('dynasties.edit', ['dynasty'=>$dynasty]);
    }

    public function update($id)
    {
        $input = Request::all();
        
        $dynasty = Emperor::findOrFail($id);

        $dynasty->dynasty_name = $input['dynasty_name'];
        $dynasty->dynasty_start_year = $input['dynasty_start_year'];
        $dynasty->dynasty_end_year = $input['dynasty_end_year'];

        $dynasty->save();
        return redirect('dynasties');
    }
}

