@extends('adminlte::page')

@section('content')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
      <div class="col-md-12">   
        <h3 class="section-title">Testimonial View</h3>
        <div class="section-title-divider"></div>
      </div>                     
    </div>          
  </div>
  <section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table table-striped">
                <thead class="bg-dark">  
                    <tr>
                        <th scope="col" class="text-center text-white">Id</th>
                        <th scope="col" class="text-center text-white">Texte</th>
                        <th scope="col" class="text-center text-white">photo</th>
                        <th scope="col" class="text-center text-white">Nom</th>
                        <th scope="col" class="text-center text-white">Fonction</th>
                        <th scope="col" class="text-center text-white">Action</th>
                    </tr>
                </thead>
             
                <tbody>
                    @foreach ($testimonials as $item)
                    <tr>
                    <td scope="row" class="text-center">{{$item->id}}</td>
                    <td scope="row" class="text-center">{{$item->text}}</td>
                    <td scope="row" class="text-center">
                        <img class="w-25" src="{{asset('storage/'.$item->photo)}}" alt="">
                    </td>
                    <td scope="row" class="text-center">{{$item->nom}}</td>
                    <td scope="row" class="text-center">{{$item->fonction}}</td>
                    <td>
                        <form action="{{route('testimonial.edit', $item->id)}}" method="GET">
                            @csrf
                            <button class="btn btn-white">
                                <i class="mx-2 text-warning fa-2x fas fa-edit"></i>
                            </button>
                        </form>
                        <form action="{{route('testimonial.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-white">
                                <i class="mx-2 text-danger fa-2x fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection