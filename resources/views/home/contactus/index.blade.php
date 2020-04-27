@extends('adminlte::page')

@section('content')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
      <div class="col-md-12">   
        <h3 class="section-title">Contact Us View</h3>
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
                        <th scope="col" class="text-center text-white">Texte</th>
                        <th scope="col" class="text-center text-white">Soustitre</th>
                        <th scope="col" class="text-center text-white">Adress</th>
                        <th scope="col" class="text-center text-white">Numéro</th>
                        <th scope="col" class="text-center text-white">Email</th>
                        <th scope="col" class="text-center text-white">Action</th>
                    </tr>
                </thead>
             
                <tbody>
                    
                    <tr>
                    <th scope="row" class="text-center">{{$contactus->id}}</th>
                    <td class="text-center">{{$contactus->titre}}</td>
                    <td class="text-center">{{$contactus->text}}</td>
                    <td class="text-center">{{$contactus->soustitre}}</td>
                    <td class="text-center">{{$contactus->adress}}</td>
                    <td class="text-center">{{$contactus->numero}}</td>
                    <td class="text-center">{{$contactus->email}}</td>
                    <td>
                        <form action="{{route('contactus.edit', $contactus)}}">
                        @csrf
                        <button type="submit" class="btn btn-white">
                            <i class="mx-2 text-warning fa-2x fas fa-edit"></i>
                        </button>
                        </form>
                    </td>
                    </tr>
           
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection