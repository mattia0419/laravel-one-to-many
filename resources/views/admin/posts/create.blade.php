@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{ route('admin.posts.index') }}" class="btn btn-success mt-3">Torna alla lista</a>
    <h1 class="my-5">Crea ptogetto</h1>
    @if($errors->any())
    <div class="alert alert-danger">
          <h3>Correggi i seguenti errori:</h3>
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
    </div>
    @endif
    <form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf

    <div class="row g-3">
      <div class="col-6">
        <label for="title">
          Titolo
      </label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
      @error('title')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-6">
        <label for="slug">
          Slug
      </label>
      <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}">
      @error('slug')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-12">
        <label for="content">
            Contenuto
        </label> 
        <textarea name="content" id="content" cols="30" rows="5" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}"></textarea>
        @error('content')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="col-3">
        <button class="btn btn-primary mt-3">Salva</button>
      </div>
    </div>
    </form>
</div> 
@endsection