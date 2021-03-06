@extends('adminlte::page')

@section('content')

      <section id="contact" class="section-bg wow fadeInUp py-5 ">
        <div class="text-center my-5">
            <h3>Formulaire Testimonial Add</h3> 
        </div>
        <div class="container">
            <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="text" id="text" placeholder="Text"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" name="photo" id="photo" placeholder="photo"
                        data-rule="text" data-msg=""/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6 mx-auto">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mx-auto">
                        <input type="text" class="form-control" name="fonction" id="fonction" placeholder="Fonction"
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