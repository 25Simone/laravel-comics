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
                    <li class="{{ Request::route()->getName() === $key ? 'active' : '' }}"> <a href="#">{{ strtoupper($item) }}</a> </li>
                @endforeach
            </ul>
        </nav>
        <div class="searchbar mx-4">
            <input class="border-0 text-end fs-5" type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </header>
</header>