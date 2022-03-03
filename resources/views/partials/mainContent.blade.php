<div class="main">
    <div class="container">
        <div class="button current-series-button px-3 py-2">CURRENT SERIES</div>
        <!-- CARDS -->
        <div class="container cards-container">
            <!-- PRINT CARDS-->
            @foreach($comics as $key => $comic) 
                <div class="card" >
                    <!-- CARD IMG -->
                    <div class="card-image">
                        <img class="thumb" src='{{ $comic["thumb"] }}' alt="card img">
                    </div>
                    <h5>{{ strtoupper($comic['series']) }}</h5>
                </div>
            @endforeach
        </div>
    </div>
    <!-- LOAD MORE SECTION -->
    <div id="load-more-section">
        <div class="button">LOAD MORE</div>
    </div>
</div>