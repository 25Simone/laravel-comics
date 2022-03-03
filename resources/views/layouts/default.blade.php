<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- HEADER --}}
    @include('partials.header')

    {{-- JUMBOTRON --}}
    @yield('jumbotron')
    
    {{-- MAIN --}}
    <main>
        @yield('mainContent')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')
</body>
</html>