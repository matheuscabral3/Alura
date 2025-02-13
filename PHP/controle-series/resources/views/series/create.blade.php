<x-layout title="Adicionar Nova Série">
    <form action="/series/salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="txtnome">Nome:</label>
            <input class="form-control" type="text" id="txtnome" name="txtnome">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</x-layout>