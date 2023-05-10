@extends('layout.app')

@section('page.p_title')
Creazione
@endsection

@section('page.title')
<div class="container">
  <h1>Inserisci i dati</h1>
</div>
@endsection

@section('page.main')
<div class="container">
    <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
   
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="src" class="form-label">Immagine</label>
          <input type="text" class="form-control" id="src" name="thumb">
        </div>

        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control" id="descrizione" rows="2" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="title">
        </div>

        <div class="mb-3">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="prezzo" name="price" min="5" max="20">
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" class="form-control" id="serie" name="type">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data di uscita</label>
            <input type="date" class="form-control" id="data" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <textarea class="form-control" id="artists" rows="2" name="artists"></textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <textarea class="form-control" id="writers" rows="2" name="writers"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>  

@endsection