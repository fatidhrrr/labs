@extends('adminlte::page')

@section('content')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
      <div class="col-md-12">   
        <h3 class="section-title">Para View</h3>
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
                        <th scope="col" class="text-center text-white">Titre</th>
                        <th scope="col" class="text-center text-white">Description 1</th>
                        <th scope="col" class="text-center text-white">Description 2</th>
                        <th scope="col" class="text-center text-white">Action</th>
                    </tr>
                </thead>
             
                <tbody>
                    @foreach ($paras as $item)
                    <tr>
                    <td scope="row" class="text-center">{{$item->id}}</td>
                    <td scope="row" class="text-center">{{$item->titre}}</td>
                    <td scope="row" class="text-center">{{$item->description1}}</td>
                    <td scope="row" class="text-center">{{$item->description2}}</td>
                    <td>
                        <form action="{{route('para.edit', $item->id)}}" method="GET">
                            @csrf
                            <button class="btn btn-white">
                                <i class="mx-2 text-warning fa-2x fas fa-edit"></i>
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