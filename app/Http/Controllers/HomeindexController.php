<?php

namespace App\Http\Controllers;

use App\Homeindex;
use Illuminate\Http\Request;

class HomeindexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeindexs = Homeindex::all();
        return view('homeindex', compact('homeindex'));
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
     * @param  \App\Homeindex  $homeindex
     * @return \Illuminate\Http\Response
     */
    public function show(Homeindex $homeindex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homeindex  $homeindex
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeindex $homeindex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homeindex  $homeindex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeindex $homeindex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homeindex  $homeindex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeindex $homeindex)
    {
        //
    }
}
