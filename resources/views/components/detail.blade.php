<section class="d-flex justify-content-center align-items-center mx-auto my-5 py-5">
    <div class="film_card shade">
        <div class="info_section p-2 col-6 d-flex flex-column align-content-center justify-content-center gap-2">
            <div class="film_header d-flex flex-column ps-4 gap-2">
                <h2 class="col-5">{{ $film->title }}</h2>
                <h4>{{ $film->release_year }}, {{ $film->director }}</h4>
                <div>
                    <span class="minutes">{{ $film->duration }}</span>
                    <p class="genre">{{ $film->genre }}</p>
                </div>
            </div>
            <div class="film_desc ps-4 pb-3">
                <p class="text col-5">
                    {{ $film->description }}
                </p>
            </div>
            @if (!($film->trailer_url === null))
                <div class="d-flex justify-content-start ps-4 mb-4">
                    <a class="btn btn2" href="{{ $film->trailer_url }}" target="_blank">
                        Guarda il trailer
                    </a>
                </div>
            @endif
        </div>
        <img class="blur_bg w-50 object-fit-cover"
            src="{{ $film->cover ? Storage::url($film->cover) : '/images/default-poster.jpg' }}" />
    </div>
</section>
