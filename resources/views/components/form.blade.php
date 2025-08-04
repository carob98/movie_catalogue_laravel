<div class="container m-5">

    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    <x-errors-all></x-errors-all>

    <form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="m-5">
        @csrf
        @if ($isUpdate)
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titolo del film</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                placeholder="Inserisci titolo" name="title" value="{{ $title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Trama</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                placeholder="Inserisci trama" name="description" value="{{ $description }}">
        </div>
        <div class="mb-3">
            <label for="release_year" class="form-label">Anno di uscita</label>
            <input type="text" class="form-control @error('release_year') is-invalid @enderror" id="release_year"
                placeholder="Inserisci anno" name="release_year" value="{{ $release_year }}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                placeholder="Inserisci genere" name="genre" value="{{ $genre }}">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Durata</label>
            <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration"
                placeholder="Inserisci durata" name="duration" value="{{ $duration }}">
        </div>
        <div class="mb-3">
            @if ($isDetail)
                <img class="mx-3 mb-3 rounded" width="100px"
                    src="{{ $film->cover ? Storage::url($film->cover) : '/images/default-poster.jpg' }}">
            @endif
            <label for="formFile" class="form-label">{{ $text ?? 'Carica una locandina' }}</label>
            <input class="form-control @error('cover') is-invalid @enderror" type="file" id="formFile"
                name="cover">
        </div>
        <button type="submit" class="btn btn1 mt-3">Salva</button>
    </form>
</div>
