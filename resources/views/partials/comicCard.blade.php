<div class="card" >
    <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none">
        <!-- CARD IMG -->
        <div class="card-image">
            <img class="thumb" src='{{ $comic->thumb }}' alt="card img">
        </div>
        <!-- CARD DATA -->
        <div class="card-data">
            <h5>{{ strtoupper($comic->series) }}</h5>
            <div>{{ $comic->type }}</div>
            <div class="price">{{ $comic->price}} €</div>
        </div>
    </a>
</div>