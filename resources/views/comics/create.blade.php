@extends('base-template')

@section('page-title')
   Nuovo Fumetto 
@endsection


@section('page-content')
<form class="pt-4">
    <div class="mb-3">
      <label for="titolo" class="form-label">Titolo del fumetto</label>
      <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp">
    </div>
    <label class="mb-3" for="descrizione">Descrizione del Fumetto</label>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="descrizione" style="height: 100px"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection