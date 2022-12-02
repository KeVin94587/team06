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
        $tags = dynasty::orderBy('dynasties.id','asc')->pluck('dynasty_name','dynasties.id');
        return view('emperors.create' , ['dynasties' =>$tags]);
    }

    public function edit($id)
    {
        $emperor = Emperor::findOrFail($id);
        $tags = dynasty::orderBy('dynasties.id','asc')->pluck('dynasty_name','dynasties.id');
        $selectedTag = $emperor->dynasty_id;
        return view('emperors.edit' , [ 'emperor'=>$emperor,'dynasties' =>$tags,'selected_dyastyid'=>$selectedTag]);
    }

    public function update($id)
    {
        $input = Request::all();
        
        $emperor = Emperor::findOrFail($id);

        $emperor->emperor_name = $input['emperor_name'];
        $emperor->dynasty_id = $input['dynasty_id'];
        $emperor->emperor_life = $input['emperor_life'];
        $emperor->emperor_start_year = $input['emperor_start_year'];
        $emperor->emperor_end_year = $input['emperor_end_year'];

        $emperor->save();
        return redirect('emperors');
    }
}
