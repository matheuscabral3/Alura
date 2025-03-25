<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Site') }}</title>
    <link rel="icon" href="{{ asset('images/title-icon.jpg') }}" type="image/jpg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *,
        body {
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            width: 100%;
            height: 100dvh;
        }

        #imgHeader {
            width: 50px;
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
            <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="{{ asset('images/title-icon.jpg') }}" alt="logo" srcset="" id="imgHeader">
            </a>
        </div>

        @if (Route::has('login'))
            @auth
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ url('/dashboard') }}" class="nav-link px-2 link-secondary">Dashboard</a></li>
                </ul>
            @else
                <div id="login_area" class="col-md-3 text-end">
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary me-2">Acessar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary me-2">Cadastrar-se</a>
                    @endif
                </div>
            @endauth
        @endif
    </header>

    <div class="container">
        <h1>Bem vindo!</h1>
        <h2>Este é um projeto simples, utilizando Laravel.</h2>
        <br>
        <hr>
        <br>
        <h3>Principais Funcionalidades:</h3>
        <ul class="list-group">
            <li class="list-group-item">
                Cadastro e Autenticação de Usuários utilizando
                <strong>Laravel Breeze e ORM (Object Relational Mapping) </strong>
            </li>
            <li class="list-group-item">

                <strong>Laravel Breeze: </strong>
                Laravel Breeze oferece autenticação simples com login, registro,
                verificação de e-mail e recuperação de senha.

            </li>
            <li class="list-group-item">
                <strong>Eloquent ORM: </strong>
                Fornece uma interface intuitiva para interagir com o banco de dados, permitindo
                consultas complexas, manipulação de dados e definições de relações entre modelos.
            </li>
            <li class="list-group-item">
                Armazenamento com Banco de Dados utilizando <strong>SQLite</strong>
            </li>
            <li class="list-group-item">
                HTML, CSS, Javascript, Git, Bootstrap, jQuery;
            </li>
        </ul>

        </h5>


    </div>



    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>