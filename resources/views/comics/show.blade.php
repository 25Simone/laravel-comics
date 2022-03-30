@extends('layouts.default')

@section('pageTitle', 'comics | details')

@section('mainContent')
    <h1 class="title p-3">Dettagli fumetto # {{ $comic->id }}</h1>

    <div class="row details-page p-3">
        @include('partials.comicCard')
        <div class="comic-details col p-4">
            <ul>
                <li> <strong>Title:</strong> {{ $comic->title }} </li>
                <li> <strong>Descrizione:</strong> {{ $comic->description }} </li>
                <li> <strong>Serie:</strong> {{ $comic->series }} </li>
                <li> <strong>Tipo:</strong> {{ $comic->type }} </li>
                <li> <strong>Data di uscita:</strong> {{ $comic->sale_date }} </li>
            </ul>
            {{-- <div class="d-flex">
                <a class="text-decoration-none mx-2" href="{{ route('comics.edit', $comic->id) }}">
                    <button class="btn btn-warning">Modifica</button>
                </a>
                @include('partials.deleteButton', [
                    "route"=>"comics.destroy",
                    "id"=>$comic->id,
                ])
            </div> --}}
        </div>
    </div>
@endsection