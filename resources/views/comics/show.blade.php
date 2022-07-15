@extends('base-template')

@section('page-title')
 {{$comic->title}}
@endsection

@section('page-content')
<div class="text-center py-4">
    <div class="d-flex justify-content-between gap-4">
        <img width="300" src="{{$comic->thumb ? $comic->thumb :'https://dummyimage.com/640x360/fff/aaa'}} " alt="{{$comic->title}}">
        <div class=" flex-grow-1">
            <h1>
                {{$comic->title}}  
            </h1>
            <p>{{$comic->description}}</p>
            <span class="d-block"> Scrittori: <span class="text-primary">{{$comic->writers}}</span></span>
            <span class="d-block"> Artisti : <span class="text-primary">{{$comic->artists}}</span></span>
            <div class="py-4">
                <span class="px-2"> Prezzo: {{$comic->price}} $</span>
                <span class="px-2"> Data di uscita: {{$comic->sale_date}}</span>
            </div>
        </div>
    </div>
</div>

@endsection