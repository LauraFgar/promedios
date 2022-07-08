<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios | Promedios</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="max-w-6xl mx-auto sm:px-6">
        <div class="mt-6 overflow-hidden px-6 py-4 shadow-md">
            <button onclick="registrar()"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button" data-modal-toggle="defaultModal">
                Nuevo
            </button>
            <table id="listado">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Parcial 1</th>
                        <th>Parcial 2</th>
                        <th>Parcial 3</th>
                        <th>Final</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Registrar un usuario
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="defaultModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <form method="POST" id="formulario">
                        @csrf
                        @method('post')
                        <div class="">
                            <label class="block font-medium text-sm text-gray-700">
                                Nombre
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                                id="nombre" type="text" name="nombre" id="nombre" required="required">
                            <span class="text-red-500 text-sm error" id="nombre_err"></span>
                        </div>
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Parcial 1
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                                id="parcial_1" type="text" name="parcial_1" id="parcial_1" required="required">
                            <span class="text-red-500 text-sm error" id="parcial_1_err"></span>
                        </div>
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Parcial 2
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                                id="parcial_2" type="text" name="parcial_2" id="parcial_2" required="required">
                            <span class="text-red-500 text-sm error" id="parcial_2_err"></span>
                        </div>
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Parcial 3
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                                id="parcial_3" type="text" name="parcial_3" id="parcial_3" required="required">
                            <span class="text-red-500 text-sm error" id="parcial_3_err"></span>
                        </div>
                        <div class="mt-4">
                            <button type="submit" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>
                            <button data-modal-toggle="defaultModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                        </div>
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Final: <span id="final"></span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="https://cdn.tailwindcss.com/"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script>
    $('#listado').DataTable({
        responsive: true,
        "lengthMenu": [
            [10, 25, 50, 100, 500],
            [10, 25, 50, 100, 500]
        ],
        "lengthChange": false,
        "searching": false,
        "destroy": true,
        "serverSide": true,
        "order": [1, "desc"],
        "ajax": {
            "url": "{{ route('usuarios.listar') }}",
            "method": "GET",
            "dataType": "json"
        },
        "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'l><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
            "<'table-responsive scroll'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "deferRender": true,
        "retrieve": true,
        "processing": true,
        "stripeClasses": [],
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": '',
            "sSearchPlaceholder": "Buscar...",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "columns": [{
                "data": "nombre",
            },
            {
                "data": "parcial_1",
            },
            {
                "data": "parcial_2",
            },
            {
                "data": "parcial_3",
            },
            {
                "data": "promedio",
                orderable: false,
            },
            {
                "data": "opciones",
                orderable: false,
                "render": function(data, type, JsonResultRow, meta) {
                    return `<a href="javascript:void(0);" onclick="eliminar('` + JsonResultRow.id + `');" class="bs-tooltip" title="Eliminar usuario" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        </a>`
                }
            }
        ]
    });

    const eliminar = (id) => {
        axios.delete("/usuarios/" + id).
        then(function(response) {
            $("#listado").DataTable().ajax.reload();
            Swal.fire({
                title: 'Proceso de eliminación',
                text: response.data.message,
                icon: response.data.status,
                confirmButtonText: 'Aceptar'
            });
        }).catch(function(error) {
            console.log(error.response);
        });
    };

    const registrar = () => {
        $("#nombre").text('');
        $("#parcial_1").text('');
        $("#parcial_2").text('');
        $("#parcial_3").text('');
        $("#final").text('');
    }

    $(document).on("submit", "#formulario", function(e) {
        e.preventDefault();
        $(".error").text('');
        $("#final").text('');

        var data = new FormData($('#formulario')[0]);
        $.ajax({
            url: "{{ route('usuarios.registrar') }}",
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status == 'success') {
                    $("#listado").DataTable().ajax.reload();
                    Swal.fire({
                        title: 'Proceso de registro',
                        text: 'Usuario registrado exitosamente',
                        icon: response.status,
                        confirmButtonText: 'Cool'
                    });
                    $("#final").text(response.final);
                } else {
                    for (var [key, value] of Object.entries(response.message)) {
                        $("#" + key + "_err").text(value);
                    }
                }
            }
        });
    });
</script>

</html>
