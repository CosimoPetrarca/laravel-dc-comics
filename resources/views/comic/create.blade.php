@extends('layout.app')

@section('page.p_title')
Creazione
@endsection

@section('page.title')
<div class="container text-center p-4">
  <h1>Inserisci i dati</h1>
</div>
@endsection

@section('page.main')
<div class="container">
    <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm mb-4">Torna alla home</a>
   
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="src" class="form-label">Immagine</label>
          <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="src" name="thumb" value="{{ old('thumb') }}">
          @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="descrizione" rows="2" name="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="titolo" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="prezzo" name="price" min="5" max="20" value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="serie" name="series" value="{{ old('series') }}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data di uscita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="data" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" rows="2" name="artists">{{ old('artists') }}</textarea>
            @error('artists')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <textarea class="form-control @error('writers') is-invalid @enderror" id="writers" rows="2" name="writers">{{ old('writers') }}</textarea>
            @error('writers')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>

</div>  

@endsection