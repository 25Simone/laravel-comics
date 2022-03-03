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
                    <li> <a href="/">{{ strtoupper($item) }}</a> </li>
                @endforeach
            </ul>
        </nav>
        <input class="searchbar mx-3" type="text" placeholder="Search">
    </header>
</header>