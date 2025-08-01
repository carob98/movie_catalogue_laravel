<x-layout>
    <x-form :isDetail="true" :film=$film>
        <x-slot name="text"><strong>LOCANDINA ATTUALE</strong></x-slot>
        <x-slot name="title">{{ $film->title }}</x-slot>
        <x-slot name="description">{{ $film->description }}</x-slot>
        <x-slot name="release_year">{{ $film->release_year }}</x-slot>
        <x-slot name="genre">{{ $film->genre }}</x-slot>
        <x-slot name="duration">{{ $film->duration }}</x-slot>
    </x-form>
</x-layout>
