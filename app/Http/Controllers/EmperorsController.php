<?php

namespace App\Http\Controllers;

use App\Models\Dynasty;
use App\Models\Emperor;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Request;
use App\Http\Requests\CreateEmperorsRequest;

class EmperorsController extends Controller
{
    public function store(CreateEmperorsRequest $request)
    { 
        $emperor_name = $request->input('emperor_name');
        $dynasty_id = $request->input('dynasty_id');
        $emperor_life = $request->input('emperor_life');
        $emperor_start_year = $request->input('emperor_start_year');
        $emperor_end_year = $request->input('emperor_end_year');

        $emperor = emperor::create([
            'emperor_name'=>$emperor_name,
            'dynasty_id'=>$dynasty_id,
            'emperor_life'=>$emperor_life,
            'emperor_start_year'=>$emperor_start_year,
            'emperor_end_year'=>$emperor_end_year]);

            return redirect('emperors');
    }
    public function index()
    {
        
        $emperors = Emperor::all();

        return view('emperors.index', ['emperors' => $emperors]);
    }

    public function senior()
    {
        $emperors = Emperor::senior()->get();
        return view('emperors.index', ['emperors' => $emperors, 'showPagination'=>false]);
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

    public function update($id, CreateEmperorsRequest $request)
    {
        $emperor = Emperor::findOrFail($id);

        $emperor->emperor_name =$request->input['emperor_name'];
        $emperor->dynasty_id =$request->input['dynasty_id'];
        $emperor->emperor_life =$request->input['emperor_life'];
        $emperor->emperor_start_year =$request->input['emperor_start_year'];
        $emperor->emperor_end_year =$request->input['emperor_end_year'];

        $emperor->save();
        return redirect('emperors');
    }
}
