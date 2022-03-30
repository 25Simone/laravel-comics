@extends('layouts.default')

@section('pageTitle', 'Comics')

{{-- JUMBOTRON --}}
@section('jumbotron')
    @include('partials.jumbotron')
@endsection

{{-- MAIN CONTENT --}}
@section('mainContent')
    <div class="main">
        <div class="container">
            <div class="button current-series-button px-3 py-2">CURRENT SERIES</div>
            {{-- CARDS CONTAINER --}}
            <div class="container cards-container">
                <!-- CARDS-->
                @foreach($comicsData as $key => $comic) 
                    @include('partials.comicCard')
                @endforeach
            </div>
        </div>
        <!-- LOAD MORE SECTION -->
        <div id="load-more-section">
            <div class="button"> <a href="{{ route('comics.create') }}" class="text-decoration-none">LOAD MORE</a> </div>
        </div>
    </div>
@endsection

{{-- PRE FOOTER --}}
@section('pre-footer')
    @include('partials.preFooter')
@endsection