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
    <h1 class="title">Tabla de Entrenadores</h1>
    <br>
    <table class="table table-striped">
        <thead>
            <tr class="alinear">
                <th>Numero de entrenador</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Contacto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entrenador as $item)
                <tr class="alinear">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Nombre }}</td>
                    <td>{{ $item->Apellido }}</td>
                    <td>{{ $item->Edad }}</td>
                    <td>{{ $item->Contacto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
