@extends('layout.app')

@section('page.p_title')
{{ $comic->title}}
@endsection
@section('page.title')
<div class="container text-center p-4">
  <h1>{{ $comic->title}}</h1>
</div>
@endsection

@section('page.main')
<div class="container">    
      <div class="card mb-3">
        <div class="text-center">
        <img src="{{ $comic->thumb}}" class="card-img-top  w-25" alt="{{ $comic->title}}">
    </div>
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title}}</h5>
          <p class="card-text">{{ $comic->type}}</p>
          <p class="card-text">{{ $comic->series}}</p>
          <p class="card-text">{{ $comic->description}}</p>
          <p class="card-text"><small class="text-body-secondary">Artists: {{ $comic->artists}}</small></p>
          <p class="card-text"><small class="text-body-secondary">Writers: {{ $comic->writers}}</small></p>
          <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna alla home</a>
        </div>
      </div>
</div>  

@endsection