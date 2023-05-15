<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    public function autocomplete(Request $request)
    {
        $data = Contents::select("title")
                ->where("title","LIKE","%{$request->query}%")
                ->get();
   
        return response()->json($data);
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
        // $content = Contents::select("contents")
        //          ->where('title','{$request->query}')
        //          ->get();
        $title=$request->get('title');
        $content=Contents::select('title')->where('title','like','%' .$title. '%')->paginate(5);
                 return view('mainpage.search', $content);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function show(Contents $contents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function edit(Contents $contents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contents $contents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contents $contents)
    {
        //
    }

    public function search()
    {
        // $search=$request->get('search');
        // $posts=DB::table('contents')->where('title','like','%' $search '%')->paginate(5);
        // return view('mainpage.search',['posts'=>$posts]);
        // $content = Contents::select("contents")
        //          ->where('title','{$request->query}')
        //          ->get();
        //          return view('mainpage.search', $content);
        $search_text=$_GET['query'];
        $content=Contents::where('title','LIKE','%' .$search_text.'%')->get();
        return view('mainpage.search',compact('content'));
    }


}
