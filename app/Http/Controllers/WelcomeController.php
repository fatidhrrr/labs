<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Carousel;
use App\Card;
use App\Para;
use App\Video;
use App\Testimonial;
use App\Team;
use App\Promotion;
use App\Contact;
use App\Contactus;
 
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $carousel = Carousel::all();
        $random = Card::inRandomOrder()->take(3)->get();
        $para = Para::all();
        $video = Video::first();
        $testimonial = Testimonial::all();
        $services = Card::latest()->take(9)->get();
        $team = Team::all();
        $promotion = Promotion::all();
        $contact = Contact::all();
        $contactus = Contactus::all();
        return view('welcome', compact('logo', 'carousel', 'random', 'para', 'video', 'testimonial', 'services', 'team', 'promotion', 'contact', 'contactus'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
