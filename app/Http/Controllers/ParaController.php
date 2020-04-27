<?php

namespace App\Http\Controllers;

use App\Para;
use Illuminate\Http\Request;

class ParaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paras = Para::all();
        return view('home.para.index', compact('paras'));
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
        $para = new Card();
        $para->titre=$request->input("titre");
        $para->description1=$request->input("description1");
        $para->description2=$request->input("description2");
        $para->save();
        return redirect()->route('para.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Para  $para
     * @return \Illuminate\Http\Response
     */
    public function show(Para $para)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Para  $para
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $para = Para::find($id); 
        return view('home.para.edit', compact('para'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Para  $para
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $para = Para::find($id);
        $para->titre=$request->input("titre");
        $para->description1=$request->input("description1");
        $para->description2=$request->input("description2");
        $para->save();
        return redirect()->route('para.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Para  $para
     * @return \Illuminate\Http\Response
     */
    public function destroy(Para $para)
    {
        //
    }
}
