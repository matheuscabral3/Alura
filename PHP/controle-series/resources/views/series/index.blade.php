<x-layout title="Séries">

    <!-- Este "criar" vem do arquivo de rota adicionado anteriormente. -->
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>


    <!-- <script>
        // const series = {{json_encode($series)}};
        const series = {{Js::from($series)}};

    </script> -->
</x-layout>