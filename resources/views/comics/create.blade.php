@extends('base-template')

@section('page-title')
   Nuovo Fumetto 
@endsection


@section('page-content')
<form class="pt-4">
    @csrf
    <div class="mb-3">
      <label for="titolo" class="form-label">Titolo del fumetto</label>
      <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp">
    </div>
    <label class="mb-3" for="descrizione">Descrizione del Fumetto</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="descrizione" style="height: 100px"></textarea>
    </div>
    <div class="mb-3">
        <label for="serie" class="form-label">Serie</label>
        <input type="text" class="form-control" id="serie" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="tipo" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="thumbnail" class="form-label">Path immagine copertina</label>
        <input type="text" class="form-control" id="thumbnail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="prezzo" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="prezzo" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="data" class="form-label">Data di uscita</label>
        <input type="date"  class="form-control" id="data" aria-describedby="emailHelp">
    </div>

    <label class="mb-3" for="Scrittori">Scrittori</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="Scrittori" style="height: 100px"></textarea>
    </div>

    <label class="mb-3" for="Artisti">Artisti</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="Artisti" style="height: 100px"></textarea>
    </div>
      

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection