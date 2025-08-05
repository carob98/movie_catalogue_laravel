<x-layout>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">Accedi</h2>
        <x-errors-all></x-errors-all>
        <form action="{{ route('login') }}" method="POST" class="m-5">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="La tua email" name="email" value={{ old('email') }}>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid    @enderror"
                    placeholder="La tua password" id="password" required>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-2 mt-3">
                <button type="submit" class="btn btn1">Accedi</button>
                <a href="{{ route('register') }}" class="btn btn2">Non sei ancora iscritto?</a>
            </div>
        </form>
    </div>
</x-layout>
