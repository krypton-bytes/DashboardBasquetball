@extends('layout.admin.master')

@section('content')
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">REGISTROS DE ADMINISTRADOR</h1>
        <p class="mb-4">Aquí se muestran todos los datos de registros de administrador <a target="_blank" href="">para más
                información</a>.</p>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">CRUD usuarios</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Password</th>
                                <th>Tipo de usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Password</th>
                                <th>Tipo de usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($admin as $item)
                                <tr id="filaUsuario{{ $item->id }}">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->Nombre }}</td>
                                    <td>{{ $item->Apellidos }}</td>
                                    <td>{{ $item->Correo }}</td>
                                    <td>{{ $item->Password }}</td>
                                    @if ($item->Permiso == 1)
                                        <td>Administrador</td>
                                    @endif
                                    <td>
                                        <button class="btn btn-primary editar-usuario-btn boton-editar"
                                            data-toggle="modal" data-target="#editarModal{{ $item->id }}">
                                            <i class="fas fa-edit"></i> Editar
                                        </button>
                                        <form class="d-inline"
                                            action="{{ route('adminCrudUsuarios.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger boton-eliminar"
                                                data-id="{{ $item->id }}"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal para editar el usuario -->
    @foreach ($admin as $item)
    <div class="modal fade" id="editarModal{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="editarModalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel{{ $item->id }}">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editarForm{{ $item->id }}" method="POST"
                        action="{{ route('adminCrudUsuarios.update', $item->id) }}">
                        @csrf
                        @method('PUT')
                        <!-- Campos del formulario de edición -->
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre{{ $item->id }}" name="nombre"
                                value="{{ $item->Nombre }}">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos{{ $item->id }}" name="apellidos"
                                value="{{ $item->Apellidos }}">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo{{ $item->id }}" name="correo"
                                value="{{ $item->Correo }}">
                        </div>
                        <!-- Campo de contraseña oculto para evitar su modificación -->
                        <input type="hidden" name="password" value="{{ $item->Password }}">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary"
                        onclick="editarUsuario('{{ $item->id }}')">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Escuchar el evento de envío del formulario de eliminación
            $('.boton-eliminar').on('click', function(e) {
                e.preventDefault();
                const id = $(this).data('id');
                eliminarUsuario(id);
            });
        });

        function eliminarUsuario(id) {
            // Mostrar una ventana de confirmación utilizando SweetAlert2
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    const url = `{{ route('adminCrudUsuarios.destroy', ':id') }}`.replace(':id', id);

                    // Enviar la solicitud DELETE utilizando AJAX
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'DELETE'
                        },
                        success: function(response) {
                            // Si la eliminación es exitosa, eliminar la fila de la tabla correspondiente
                            if (response.success) {
                                $('#filaUsuario' + id).remove();

                                // Mostrar una notificación de éxito utilizando SweetAlert2
                                Swal.fire(
                                    '¡Eliminado!',
                                    'El registro ha sido eliminado exitosamente.',
                                    'success'
                                );
                            }
                        },
                        error: function(xhr) {
                            // En caso de error, mostrar una notificación de error utilizando SweetAlert2
                            Swal.fire(
                                'Error',
                                'Ha ocurrido un error al eliminar el registro.',
                                'error'
                            );
                        }
                    });
                }
            });
        }

        function editarUsuario(id) {
            const formId = '#editarForm' + id;
            const form = $(formId);
            const url = form.attr('action');

            // Enviar la solicitud PUT utilizando AJAX
            $.ajax({
                url: url,
                type: 'POST',
                data: form.serialize(),
                success: function(response) {
                    // Si la edición es exitosa, mostrar una notificación de éxito utilizando SweetAlert2
                    Swal.fire(
                        '¡Editado!',
                        'El registro ha sido editado exitosamente.',
                        'success'
                    ).then(() => {
                        // Recargar la página para mostrar los cambios actualizados
                        location.reload();
                    });
                },
                error: function(xhr) {
                    // En caso de error, mostrar una notificación de error utilizando SweetAlert2
                    Swal.fire(
                        'Error',
                        'Ha ocurrido un error al editar el registro.',
                        'error'
                    );
                }
            });
        }

    </script>
    @endsection
