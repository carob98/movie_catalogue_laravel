<x-layout>
    <div class="full-bg p-5 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">Aggiungi un film al catalogo</h2>
        <x-form :isDetail="false">
            <x-slot name="title">{{ old('title') }}</x-slot>
            <x-slot name="description">{{ old('description') }}</x-slot>
            <x-slot name="release_year">{{ old('release_year') }}</x-slot>
            <x-slot name="genre">{{ old('genre') }}</x-slot>
            <x-slot name="duration">{{ old('duration') }}</x-slot>
        </x-form>
    </div>
</x-layout>
