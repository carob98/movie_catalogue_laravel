<div class="d-flex flex-column content-justify-center content-align-start">
    <img class="card-img rounded-4" src="{{ $film->cover ? Storage::url($film->cover) : '/images/default-poster.jpg' }}"
        alt="{{ $film->title }}">
    <div class="d-flex flex-column my-4">
        <h6 class="text-white fw-bold">{{ $film->title }}</h6>
        <p class="text-white"><strong>Genere: </strong>{{ $film->genre }}</p>
    </div>
</div>
