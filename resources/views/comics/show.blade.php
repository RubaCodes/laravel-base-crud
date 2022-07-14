@extends('base-template')

@section('page-title')
 {{$comic->title}}
@endsection

@section('page-content')
<div class="text-center">
    <h1>
        {{$comic->title}}  
    </h1>
    <div class="d-flex justify-content-between gap-4">
        <img width="300" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class=" flex-grow-1">
            <p>{{$comic->description}}</p>
            <p> Scrittori :{{$comic->artists}}</p>
            <p> Artisti :{{$comic->artists}}</p>
        </div>
    </div>
</div>

@endsection