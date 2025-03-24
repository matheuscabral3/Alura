<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif

    <style>
        #imgHeader {
            width: 75px;
            height: auto;
            margin-left: 10px;
            border-radius: 10px;
        }

        #login_area {
            margin-right: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>

    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="data:image/jpeg;base64,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"
                    alt="" srcset="" id="imgHeader">
            </a>
        </div>


        @if (Route::has('login'))
            @auth
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ url('/dashboard') }}" class="nav-link px-2 link-secondary">Dashboard</a></li>
                </ul>
            @else
                <div id="login_area" class="col-md-3 text-end">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Acessar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Cadastrar-se</a>
                    @endif
                </div>
            @endauth
        @endif
    </header>

    <div class="container">
        <h1>Bem vindo!</h1>
        <h2>Esta é a Página Inicial</h2>
    </div>



    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>