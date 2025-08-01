<x-layout>
    <div class="container.fluid full-bg">
        <section class="container mx-auto">
            <div class="d-flex justify-content-between my-5">
                <h2>Tutti i film</h2>
                @auth
                    @if (Auth::user()->is_admin)
                        <a href="{{ route('films.create') }}" class="btn btn1">Aggiungi film</a>
                    @endif
                @endauth
            </div>
            @foreach ($films as $film)
                <x-catalogue :film='$film'></x-catalogue>
            @endforeach
        </section>
    </div>
</x-layout>
