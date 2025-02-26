<x-layout title="Séries">

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('seasons.index', $serie->id) }}">
                    {{ $serie->nome }}
                </a>


                <span class="d-flex justify-content-around align-items-center">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">E</a>

                    <form Action="{{ route('series.destroy', $serie->id) }}" method="POST" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>

    <!-- Este "criar" vem do arquivo de rota adicionado anteriormente. -->
    <a href="{{ route('series.create') }}" class="btn btn-dark mt-2">Adicionar</a>

    <script>
        // Obter as informações enviadas através de => SeriesController
        // 1º Modelo
        // const series = {{json_encode($series)}};
        // 2º Modelo
        // const series = {{Js::from($series)}};
        // console.log(series);
    </script>
</x-layout>