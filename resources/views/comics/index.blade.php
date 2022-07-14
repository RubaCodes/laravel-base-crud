@extends('base-template')

@section('page-title')
Comics    
@endsection

@section('page-content')
<h1 class="text-center">Elenco Comics DC</h1>
<div class="row row-cols-4 border">
    @foreach ($comics as $comic)
        <div class="col text-center border p-4 bg-black">
            <img  src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <a class="link-info" href="{{ route('comics.show', $comic->id) }}">
                <h3 >{{$comic->title}}</h3>
            </a>
        </div>
    @endforeach
  </div>
@endsection