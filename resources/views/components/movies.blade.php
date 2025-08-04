<section class="my-5 d-flex flex-wrap gap-4 justify-content-center align-items-center">
    @foreach ($films as $film)
        <x-card :film="$film"></x-card>
    @endforeach
</section>
