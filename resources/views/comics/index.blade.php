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
                <a class="d-block p-2" href="{{route('comics.show', $comic->id)}}"><button class="btn btn-primary w-100">More</button></a>
                <a class="d-block p-2"href="{{route('comics.edit', $comic->id)}}"><button class="btn btn-warning w-100">Edit</button></a>
                <form class="p-2" action="{{route('comics.destroy', $comic->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger w-100">Delete</button>
                </form>
            </td>
          </tr> 
        @endforeach
    </tbody>
  </table>
@endsection