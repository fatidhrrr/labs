@extends('layouts/master')

@section('content')

    @include('/home/nav')

    @include('/blog/header')

    @include('/blog/article1')

    @include('/blog/article2')

    @include('/blog/article3')

    @include('/blog/categorie')

    @include('/blog/insta')

    @include('/blog/tags')

    @include('/blog/quote')

    @include('/blog/add')

    @include('/service/newsletter')

    @include('/home/footer')

@endsection