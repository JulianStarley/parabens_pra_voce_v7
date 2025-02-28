<!DOCTYPE html>
<html>

<head>
    <title>Parabéns pra Você</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    @yield('head')
</head>

<body>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script>
        $(document).ready(function() {
                $('#aniversariosTable').DataTable({
                    "autoWidth": false,
                    language: {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "Mostrar _MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
                "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
                }
                },
                "order": [
                [1, "desc"]
                ],
                columnDefs: [
                { "width": "60%", "targets": 0 },
                { "width": "18%", "targets": 1 },
                { "width": "15%", "targets": 2 },
                {
                    "targets": [2],
                    "className": "dt-body-left",
                    "targets": [1],
                    "className": "dt-body-right",
                },
                ],
                });
            });
    </script>
</body>

</html>
