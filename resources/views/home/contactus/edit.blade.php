@extends('adminlte::page')

@section('content')

      <section id="contact" class="section-bg wow fadeInUp py-5 ">
        <div class="text-center my-5">
            <h3>Formulaire Contact Us</h3> 
        </div>
        <div class="container">
            <form action="{{route('contactus.update', $contactus)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$contactus->titre}}" name="titre" id="titre" placeholder="Titre"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$contactus->text}}" name="text" id="text" placeholder="Texte"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$contactus->soustitre}}" name="soustitre" id="soustitre" placeholder="Sous-titre"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$contactus->adress}}" name="adress" id="adress" placeholder="Adress"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$contactus->numero}}" name="numero" id="numero" placeholder="Numero"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$contactus->email}}" name="email" id="email" placeholder="Email"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
                </div>
            </form>
        </div>
    </section>
@endsection