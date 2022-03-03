<?php
    $navItems = [
        "characters" => "characters",
        "comics" => "comics",
        "movies" => "movies",
        "tv" => "tv",
        "games" => "games",
        "collectibles" => "collectibles",
        "videos" => "videos",
        "fans" => "fans",
        "news" => "news",
        "shop" => "shop",
    ];
?>
<header>
    <header>
        <!-- LOGO -->
        <div id="logo">
            <a href="/">
                <img src="{{ asset('images/dc-logo.png') }}" alt="logo Dc Comics">
            </a>
        </div>
        <!-- NAVBAR -->
        <nav>
            <ul>
                @foreach($navItems as $key => $item)
                    <li> <a href="{{ route($key) }}">{{ strtoupper($item) }}</a> </li>
                @endforeach
            </ul>
        </nav>
        <input class="searchbar mx-3" type="text" placeholder="Search">
    </header>
</header>