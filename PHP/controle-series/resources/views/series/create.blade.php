<x-layout title="Adicionar Nova Série">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label class="form-label" for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" autofocus>
            </div>

            <div class="col-2">
                <label class="form-label" for="seasonsQty">Nº Temporadas:</label>
                <input type="text" class="form-control" id="seasonsQty" name="seasonsQty"
                    value="{{ old('seasonsQty') }}">
            </div>

            <div class="col-2">
                <label class="form-label" for="episodesPerSeason">Eps / Temporada:</label>
                <input type="text" class="form-control" id="episodesPerSeason" name="episodesPerSeason"
                    value="{{ old('episodesPerSeason') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

</x-layout>