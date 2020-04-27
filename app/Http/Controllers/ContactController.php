<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactmail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexview()
    {
        $logo = Logo::all();
        return view('contact.contacts', compact('logo'));
    
    }

    public function index()
    {
        $contact = Contact::all();
        return view('home.contact.index', compact('contact'));
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
        $contact = new Contact();
        $contact->nom=$request->input("nom");
        $contact->email=$request->input("email");
        $contact->subject=$request->input("subject");
        $contact->message=$request->input("message");
        $contact->save();
        // Accède à l'email du contact
        Mail::to($contact->email)->send(new Contactmail($contact->message));
        // Récupère l'id du form de la blade pour que quand j'envoie mon message il reste a la section contact
        return redirect()->to(url()->previous() . '#con_form')->with('msg', 'Votre message à bien été envoyer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
