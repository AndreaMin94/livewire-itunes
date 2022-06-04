<div class="container">
    <div class="row">
        <div class="col-12">
            <label class="h3">Search</label>
            <input class="form-control" type="text" wire:model.lazy="search">
            <button class="btn btn-outline-info my-3">Search</button>
        </div>
    </div>
{{--
    <div class="row">
        @foreach($searchResults as $song)
        <div class="col-12 col-md-3 my-2">
            <div class="card" style="width: 18rem;">
                <img src="{{$song['artworkUrl100']}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $song['trackName']}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}

    <section class="hero-section">
        <div class="card-grid">
        @if(count($searchResults) > 0)
            @foreach($searchResults as $song)
                <a class="card" href="#">
                    <div class="card__background" style="background-image: url({{$song['artworkUrl100']}})"></div>
                    <div class="card__content">
                        <p class="card__category">Category</p>
                        <h3 class="card__heading">{{ $song['trackName'] ?? ''}}</h3>
                    </div>
                </a>
            @endforeach
        @endif
        <div>
    </section>
</div>
