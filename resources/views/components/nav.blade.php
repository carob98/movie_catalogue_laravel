    <nav class="navbar navbar-expand-lg navbar-bg-color">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pages.homepage') }}">
                <img width="120px" src="images/logo.svg" alt="{{ env('APP_NAME') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Da fixare il colore dell'hambureger menu -->
            </button>
            <div class="collapse navbar-collapse justify-content-end text-uppercase text-white fw-bold"
                id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pages.homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('films.index') }}">Catalogo Completo</a>
                    </li>
            </div>
        </div>
    </nav>
