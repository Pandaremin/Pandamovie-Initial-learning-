<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Contents::latest()->paginate(5);
        $contents1 = Contents::orderBy('views','DESC')->paginate(5);
        $contents2 = Contents::latest()->get();
        return view('contents.index',compact('contents','contents1','contents2'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'poster' => 'required',
            
            
            'releasedate' => 'required',
            'duration' => 'required',
            
            
            
            
        ]);
  
        Contents::create($request->all());
   
        return redirect()->route('contentsadmin.index')
                        ->with('success','Content added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contnets  $contnets
     * @return \Illuminate\Http\Response
     */
    public function show($contnets)
    {
        $content=Contents::find($contents); 
        
        return view('frontcontents.show',compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contnets  $contnets
     * @return \Illuminate\Http\Response
     */
    public function edit($contents)
    {
        $content=Contents::find($contents);
        return view('contents.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contnets  $contnets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$contents)
    {
        $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'download1' => 'required',
            'download2' => 'required',
            'info' => 'required',
            
            'releasedate' => 'required',
            'duration' => 'required',
            
            
            'agerestriction' => 'required',
            'sub' => 'required',
        ]);
  
        // $contents->update($request->all());
        Contents::find($contents)->update($request->all());
  
        return redirect()->route('contentsadmin.index')
                        ->with('success','Content updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contnets  $contnets
     * @return \Illuminate\Http\Response
     */
    public function destroy($contents)
    {
        Contents::find($contents)->delete();
        return redirect()->route('contentsadmin.index')
        ->with('success','Content deleted successfully');
    }


    public function recent()
    {
        $contents2 = Contents::latest()->paginate(10);
  
        return view('contents.recent',compact('contents2'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function popular()
    {
        $contents3 = Contents::orderBy('views','DESC')->paginate(10);
        return view('contents.popular',compact('contents3'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
