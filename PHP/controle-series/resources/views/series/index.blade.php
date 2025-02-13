<x-layout title="Séries">

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>

    <!-- Este "criar" vem do arquivo de rota adicionado anteriormente. -->
    <a href="/series/criar" class="btn btn-dark mt-2">Adicionar</a>

    <script>
        // Obter as informações enviadas através de => SeriesController
        // 1º Modelo
        // const series = {{json_encode($series)}};
        // 2º Modelo
        // const series = {{Js::from($series)}};
        // console.log(series);
    </script>
</x-layout>