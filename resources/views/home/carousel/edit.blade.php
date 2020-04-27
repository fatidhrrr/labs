@extends('adminlte::page')

@section('content')

      <section id="contact" class="section-bg wow fadeInUp py-5 text-center">
        <div class="text-center my-5">
            <h3>Formulaire Logo</h3> 
        </div>
        <div class="container">
            {{-- <section class="form py-5 mt-5 container"> --}}
            <form action="{{route('carousel.update', $carousel)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" value="{{$carousel->photo}}" name="photo" id="photo" placeholder="photo"
                        data-rule="text" data-msg=""/>
                        <img class="w-50" src="{{asset('storage/'.$carousel->photo)}}" alt="">
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