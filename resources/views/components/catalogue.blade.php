<div class="d-flex my-5 mx-auto justify-content-center align-items-center gap-5">
    <img class="card-img rounded-4" src="{{ $film->cover ? Storage::url($film->cover) : '/images/default-poster.jpg' }}"
        alt="{{ $film->title }}">
    <div class="d-flex flex-column justify-content-center align-items-start p-2 col-6 gap-3">
        <h3>{{ $film->title }}</h3>
        <h6>Genere: {{ $film->genre }}</h6>
        <p>{{ $film->description }}</p>
        <div class="d-flex w-100 justify-content-between">
            <h6>Anno: {{ $film->release_year }}</h6>
            <h6>Durata: {{ $film->duration }}</h6>
        </div>
        <div class="d-flex w-100 justify-content-between">
            <a href="{{ route('films.show', ['film' => $film]) }}" class="btn btn2">Scopri di più</a>
            @if (Auth::user()->is_admin)
                <div class="d-flex justify-content-end gap-4">
                    <a href="{{ route('films.edit', ['film' => $film]) }}" class="btn btn2">Modifica</a>
                    <form action="{{ route('films.destroy', ['film' => $film]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn1">Elimina</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
