<div class="d-flex my-5 mx-auto flex-column flex-lg-row justify-content-center align-items-center gap-5 gap-lg-0">
    <img class="card-img1 rounded-4 col-6"
        src="{{ $film->cover ? Storage::url($film->cover) : '/images/default-poster.jpg' }}" alt="{{ $film->title }}">
    <div class="d-flex flex-column justify-content-center col-12 col-lg-6 p-lg-5 gap-3">
        <h3>{{ $film->title }}</h3>
        <h6>Genere: {{ $film->genre }}</h6>
        <p>{{ $film->description }}</p>
        <div class="d-flex justify-content-between">
            <h6>Anno: {{ $film->release_year }}</h6>
            <h6>Durata: {{ $film->duration }}</h6>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('films.show', ['film' => $film]) }}" class="btn btn2 me-4">Scopri di più</a>
            @if (Auth::user()->is_admin)
                <div class="d-flex justify-content-end gap-4">
                    <a href="{{ route('films.edit', ['film' => $film]) }}" class="btn btn2">Modifica</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn1" data-bs-toggle="modal"
                        data-bs-target="#film-{{ $film->id }}">Elimina</button>

                    <!-- Modal -->
                    <div class="modal fade" id="film-{{ $film->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="film-{{ $film->id }}">
                                        Sei sicuro di voler eliminare il film "{{ $film->title }}"?
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Attenzione: L'operazione non é reversibile.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annulla</button>
                                    <form action="{{ route('films.destroy', ['film' => $film]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn1">Elimina</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
