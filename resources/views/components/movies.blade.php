<section class='container.fluid'>
    <div class="p-5 rectangle-inverse d-flex flex-wrap gap-4 justify-content-center align-items-center">
        @foreach ($films as $film)
            <x-card :film="$film"></x-card>
        @endforeach
    </div>
</section>
