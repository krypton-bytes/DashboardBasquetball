@extends('layout.user.master')
@section('content')
    <style>
        .title {
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            color: rgb(22, 78, 161);
            padding: 30px, 0px, 3
        }

        .team-logo {
            width: 100px;
            object-fit: cover;
        }

        .table-navar {
            text-align: center;
        }

        .alinear {
            text-align: center;
        }
    </style>
    <div class="container">
        <h1 class="title">Tabla de Equipos</h1>
        <br>
        <table class="table table-striped">
            <thead>
                <tr class="alinear">
                    <th>Imagen de equipo</th>
                    <th>Nombre de equipo</th>
                    <th>Categoría</th>
                    <th>Generación</th>
                    <th>Copa</th>
                    <th>Entrenador</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $item)
                    <tr class="alinear">
                        <td> <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                                alt="Logo de Club Mérida" class="team-logo"></td>
                        <td>{{ $item->Nombre }}</td>
                        <td>{{ $item->Categoria }}</td>
                        <td>{{ $item->Generacion }}</td>
                        <td>{{ $item->Copa }}</td>
                        <td>{{ $item->entrenador->Nombre }} {{ $item->entrenador->Apellido }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
