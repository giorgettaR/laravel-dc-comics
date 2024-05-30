@extends('layouts.app')

@section('title',' DC-Comics')

@section('content')

<main>

<div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="p-2">Comics</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <div class="card p-2">
          <img class="d-block card-img-top" src="{{ $comic['thumb'] }}" alt="..." style="height: 350px">
        </div>
      </div>
      <div class="col-9 p-2" >
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $comic['title'] }}</h5>
            <p class="card-text" style="height: 200px; overflow: auto;">{{ $comic['description'] }}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: {{ $comic['price'] }}</li>
            <li class="list-group-item">Series: {{ $comic['series'] }}</li>
            <li class="list-group-item">Type: {{ $comic['type'] }}</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Artists</a>
            <a href="#" class="card-link">Writers</a>
          </div>
        </div>
      </div>
</div>
</main>
@endsection