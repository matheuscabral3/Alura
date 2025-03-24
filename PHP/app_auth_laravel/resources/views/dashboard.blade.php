<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Página Inicial
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table id="tb_usuarios" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">Nome</th>
                            <th class="px-4 py-2 border">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-4 py-2 border">{{ $user->id }}</td>
                                <td class="px-4 py-2 border">{{ $user->name }}</td>
                                <td class="px-4 py-2 border">{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#tb_usuarios').DataTable({
                // paging: true,                   // Ativar paginação
                pageLength: 25,                 // Número de registros por página
                lengthChange: true,             // Não permitir alteração do número de registros por página
                aLengthMenu: [
                    [25, 50, 100, -1],
                    [25, 50, 100, "Todos"]
                ],
                iDisplayLength: -1,
                searching: true,                // Desativar a pesquisa
                ordering: true,                 // Permitir ordenação nas colunas
                info: true,                     // Exibir informações de paginação (por exemplo, "Mostrando 1 até 10 de 100 registros")
                responsive: true,               // Tornar a tabela responsiva
                scrollY: '430px',               // Altura máxima da área de rolagem vertical
                scrollCollapse: true,           // Colapsar a área de rolagem quando não estiver em uso
                language: {
                    paginate: {
                        first: 'Primeira',
                        previous: 'Anterior',
                        next: 'Próxima',
                        last: 'Última'
                    },
                    info: 'Exibindo _START_ até _END_ de _TOTAL_ registros',
                    infoEmpty: 'Sem Registros',
                    searchPlaceholder: "Buscar Por:",
                    search: "",
                    emptyTable: "Não Existe Dados para Geração do Relatório.",
                    lengthMenu: "Exibir _MENU_ Registros."
                },
                columnDefs: [
                    { "className": "dt-center", "targets": "_all" }
                ]
            });
            console.log('Tabela carregada utilizando jQuery');
        });
    </script>


</x-app-layout>