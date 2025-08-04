<x-layout>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">Modifica il film</h2>
        <x-form :isDetail="true" isUpdate="true" :film=$film>
            <x-slot name="action">{{ route('films.update', ['film' => $film]) }}</x-slot>
            <x-slot name="text"><strong>LOCANDINA ATTUALE</strong></x-slot>
            <x-slot name="title">{{ $film->title }}</x-slot>
            <x-slot name="description">{{ $film->description }}</x-slot>
            <x-slot name="release_year">{{ $film->release_year }}</x-slot>
            <x-slot name="genre">{{ $film->genre }}</x-slot>
            <x-slot name="duration">{{ $film->duration }}</x-slot>
            <x-slot name="director">{{ $film->director }}</x-slot>
            <x-slot name="trailer_url">{{ $film->trailer_url }}</x-slot>
        </x-form>
    </div>
</x-layout>
