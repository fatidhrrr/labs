@extends('adminlte::page')

@section('content')

      <section id="contact" class="section-bg wow fadeInUp py-5 text-center">
        <div class="text-center my-5">
            <h3>Formulaire Logo</h3> 
        </div>
        <div class="container">
            <form action="{{route('logo.update', $logo)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" value="{{$logo->photo}}" name="photo" id="photo" placeholder="photo"
                        data-rule="text" data-msg=""/>
                        <img class="w-50" src="{{asset('storage/'.$logo->photo)}}" alt="">
                        <div class="validation"></div> 
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$logo->text}}" name="text" id="text" placeholder="text"
                        data-rule="text" data-msg=""/>
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