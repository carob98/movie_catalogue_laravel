<x-layout>
    <x-hero></x-hero>
    <x-movies :films=$films></x-movies>
    <div class="d-flex justify-content-center">
        <a href="{{ route('films.index') }}" class="btn btn1">Catalogo Completo</a>
    </div>
</x-layout>
