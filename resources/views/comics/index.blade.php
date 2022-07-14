@extends('base-template')

@section('page-title')
Comics    
@endsection

@section('page-content')
<h1 class="text-center">Elenco Comics DC</h1>
<div class="row row-cols-4 border">
    @foreach ($comics as $comic)
        <div class="col text-center border p-4 bg-danger">
            <img  src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <h3 class="text-white">{{$comic->title}}</h2>
        </div>
    @endforeach
  </div>
@endsection