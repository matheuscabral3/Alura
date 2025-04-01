<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Título</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            h2 {
                color: blue;
            }
        </style>
    @endif
</head>

<body class="">
    <header class="">
        @if (Route::has('login'))
            <nav class="">
                @auth
                    <a href="{{ url('/dashboard') }}" class="">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <div class="">
        <main class="">
            <div class="">
                <h1>Bem Vindo!</h1>
                <h2>Exemplo prática de Deploy para aplicação em Laravel</h2>
            </div>
        </main>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>