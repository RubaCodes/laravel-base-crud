@extends('base-template')

@section('page-title')
 {{$comic->title}}
@endsection

@section('page-content')
<div class="text-center py-4">
    <div class="d-flex justify-content-between gap-4">
        <img width="300" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class=" flex-grow-1">
            <h1>
                {{$comic->title}}  
            </h1>
            <p>{{$comic->description}}</p>
            <span class="d-block"> Scrittori :{{$comic->artists}}</span>
            <span class="d-block"> Artisti :{{$comic->artists}}</span>
            <div class="py-4">
                <span class="px-2"> Prezzo: {{$comic->price}} $</span>
                <span class="px-2"> Data di uscita: {{$comic->sale_date}}</span>
            </div>
        </div>
    </div>
</div>

@endsection