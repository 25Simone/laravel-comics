@extends('layouts.default')

@section('pageTitle', 'Home')

{{-- JUMBOTRON --}}
@section('jumbotron')
    @include('partials.jumbotron')
@endsection

{{-- MAIN CONTENT --}}
@section('mainContent')
    @include('partials.mainContent')
@endsection