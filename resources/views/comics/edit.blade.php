@extends('layouts.app')

@section('title','Comics - DC-COMICS')

@section('content')

<main>
  <section>
    <div class="container">
      <h2 class="fs-2">Modify {{ $comic->title }}</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.update', $comic) }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title',$comic->title) }}">
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Url Img</label>
          <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{ old('thumb',$comic->thumb) }}">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="graphic novel" value="{{ old('type',$comic->type) }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea type="text" name="description" class="form-control" id="description"  rows="3" placeholder="Description">{{ old('description',$comic->description) }}</textarea>
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="$16.99" value="{{ old('price',$comic->price) }}">
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date',$comic->sale_date) }}">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{ old('series',$comic->series) }}">
        </div>        
        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" class="form-control" name="artists" id="artists" placeholder="..." value="{{ old('artists',$comic->artists) }}">
        </div>        
        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" class="form-control" name="writers" id="writers" placeholder="..." value="{{ old('writers',$comic->writers) }}">
        </div>
        <button class="btn btn-primary">Salva</button>
      </form>
    </div>
    <div class="container">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
  </section>
</main>

@endsection