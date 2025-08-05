<x-layout>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">Registrati</h2>
        <x-errors-all></x-errors-all>
        <form action="{{ route('register') }}" method="POST" class="m-5">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Il tuo nome" name="name" value={{ old('name') }}>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="La tua email" name="email" value={{ old('email') }}>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid    @enderror"
                    id="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma
                    password</label>
                <input type="password" name="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid    @enderror"
                    id="password_confirmation" required>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-2 mt-3">
                <button type="submit" class="btn btn1">Registrati</button>
                <a href="{{ route('login') }}" class="btn btn2">Gia' iscritto?</a>
            </div>
        </form>
    </div>
</x-layout>
