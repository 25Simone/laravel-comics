@extends('layouts.default')

@section('pageTitle', 'comics | create')

@section('mainContent')
<h1 class="px-5 py-2">Aggiungi fumetto</h1>

<form action="{{ route('comics.store') }}" method="post" class="row g-3">
  @csrf

  <div class="row px-5 py-2">
      <div class="col">
          <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" value="{{ old('title') }}">
          </div>
      </div>
      
        <div class="col">
            <div class="mb-3">
              <label class="form-label">Anteprima</label>
              <input type="text" class="form-control" name="thumb" value="{{ old('thumb') }}">
            </div>
        </div>
  </div>

  <div class="row px-5 py-2">
      <div class="col">
          <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" value="{{ old('series') }}">
          </div>
      </div>
    
      <div class="col">
          <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
          </div>
      </div>
  </div>
  
  <div class="row px-5 py-2">
      <div class="col">
          <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="number" class="form-control" name="price" value="{{ old('price') }}">
          </div>
      </div>
    
      <div class="col">
          <div class="mb-3">
            <label class="form-label">Data di uscita</label>
            <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
          </div>
      </div>
  </div>

  <div class="col px-5 py-2">
      <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
      </div>
  </div>

  <div class="d-flex px-5 pt-0 pb-4">
    <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
    <button class="btn btn-success" type="submit">Crea</button>
  </div>
</form>
@endsection