@extends('layouts.default')

@section('pageTitle', 'Comics')

{{-- JUMBOTRON --}}
@section('jumbotron')
    @include('partials.jumbotron')
@endsection

{{-- MAIN CONTENT --}}
@section('mainContent')
    @include('partials.mainContent')
@endsection

{{-- PRE FOOTER --}}
@section('pre-footer')
    @include('partials.preFooter')
@endsection