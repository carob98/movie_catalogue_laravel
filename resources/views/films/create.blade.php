<x-layout>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">Aggiungi un film al catalogo</h2>
        <x-form :isDetail="false" :isUpdate="false">
            <x-slot name="action">{{ route('films.store') }}</x-slot>
            <x-slot name="title">{{ old('title') }}</x-slot>
            <x-slot name="description">{{ old('description') }}</x-slot>
            <x-slot name="release_year">{{ old('release_year') }}</x-slot>
            <x-slot name="genre">{{ old('genre') }}</x-slot>
            <x-slot name="duration">{{ old('duration') }}</x-slot>
            <x-slot name="director">{{ old('director') }}</x-slot>
            <x-slot name="trailer_url">{{ old('trailer_url') }}</x-slot>
        </x-form>
    </div>
</x-layout>
