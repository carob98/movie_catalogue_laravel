    <nav class="navbar navbar-expand-lg navbar-bg-color p-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pages.homepage') }}">
                <img width="120px" src="/images/logo.svg" alt="{{ env('APP_NAME') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Da fixare il colore dell'hambureger menu -->
            </button>
            <div class="collapse navbar-collapse justify-content-end text-white" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex align-items-center">
                    @auth
                        <li class="me-4">Ciao, {{ Auth::user()->name }}</li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link text-white text-uppercase fw-bold"
                            href="{{ route('pages.homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-uppercase fw-bold" href="{{ route('films.index') }}">Catalogo
                            Completo</a>
                    </li>
                    @guest
                        <li class="nav-item mx-2">
                            <a class="btn btn1" href="{{ route('register') }}">Registrati</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="btn btn2" href="{{ route('login') }}">Accedi</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn1 mx-2">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
