<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;

class FrontContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Contents::latest()->paginate(20);
  
        return view('frontcontents.index',compact('contents'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function popular()
    {
        $contents2 = Contents::orderBy('views','DESC')->paginate(20);
  
        return view('frontcontents.popular',compact('contents2'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FrontContents  $frontContents
     * @return \Illuminate\Http\Response
     */
    public function show($frontContents)
    {
        Contents::find($frontContents)->increment('views');
        $content=Contents::find($frontContents); 
        return view('frontcontents.show',compact('content'));
    //    {
    //     if ($media->rating =='movie' ) {
    //         return view('usermedia.show',compact('media'));
            
    
    //     } else {
    //         return view('usermedia.showseries',compact('media'));

    //     }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FrontContents  $frontContents
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontContents $frontContents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrontContents  $frontContents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontContents $frontContents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrontContents  $frontContents
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontContents $frontContents)
    {
        //
    }
}
