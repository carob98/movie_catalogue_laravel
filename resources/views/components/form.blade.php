<div class="container m-5">

    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    <x-errors-all></x-errors-all>

    <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data" class="m-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo del film</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                placeholder="Inserisci titolo" name="title" value={{ old('title') }}>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Trama</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                placeholder="Inserisci trama" name="description" value={{ old('description') }}>
        </div>
        <div class="mb-3">
            <label for="release_year" class="form-label">Anno di uscita</label>
            <input type="text" class="form-control @error('release_year') is-invalid @enderror" id="release_year"
                placeholder="Inserisci anno" name="release_year" value={{ old('release_year') }}>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                placeholder="Inserisci genere" name="genre" value={{ old('genre') }}>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Durata</label>
            <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration"
                placeholder="Inserisci durata" name="duration" value={{ old('duration') }}>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Carica una locandina</label>
            <input class="form-control @error('cover') is-invalid @enderror" type="file" id="formFile"
                name="cover" value={{ old('cover') }}>
        </div>
        <button type="submit" class="btn btn1 mt-3">Salva</button>
    </form>
</div>
