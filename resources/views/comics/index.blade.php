@extends('base-template')

@section('page-title')
Comics    
@endsection

@section('page-content')
<h1 class="text-center">Elenco Comics DC</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Copertina</th>
        <th scope="col">Serie</th>
        <th scope="col">Prezzo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td><img height="200" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->price}}$</td>
            <td>
                <a href="{{route('comics.show', $comic->id)}}"><button class="btn btn-primary">More</button></a>
                <a href="{{route('comics.edit', $comic->id)}}"><button class="btn btn-warning">Edit</button></a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr> 
        @endforeach
    </tbody>
  </table>
@endsection