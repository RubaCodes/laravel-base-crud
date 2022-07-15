@extends('base-template')

@section('page-title')
   Nuovo Fumetto 
@endsection


@section('page-content')
<form class="p-4" action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="titolo" class="form-label">Titolo del fumetto</label>
      <input name="title" type="text" class="form-control" id="titolo" >
    </div>
    <label class="mb-3" for="descrizione">Descrizione del Fumetto</label>
    <div class="form-floating mb-3">
        <textarea name="description" class="form-control" id="descrizione" style="height: 100px" ></textarea>
    </div>
    <div class="mb-3">
        <label for="serie" class="form-label">Serie</label>
        <input name="series" type="text" class="form-control" id="serie" >
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <input name="type"type="text" class="form-control" id="tipo" >
    </div>
    <div class="mb-3">
        <label for="thumbnail" class="form-label">Path immagine copertina</label>
        <input name="thumb" type="text" class="form-control" id="thumbnail" >
    </div>
    <div class="mb-3">
        <label for="prezzo" class="form-label">Prezzo</label>
        <input name="price" type="number" step="any" class="form-control" id="prezzo" >
    </div>
    <div class="mb-3">
        <label for="data" class="form-label">Data di uscita</label>
        <input name="sale_date" type="date"  class="form-control" id="data" >
    </div>

    <label class="mb-3" for="Scrittori">Scrittori ( separati da una virgola)</label>
    <div class="form-floating mb-3">
        <textarea name="writers" class="form-control" id="Scrittori" style="height: 100px"></textarea>
    </div>

    <label class="mb-3" for="Artisti">Artisti ( separati da una virgola)</label>
    <div class="form-floating mb-3">
        <textarea name="artists"  class="form-control" id="Artisti" style="height: 100px"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection