@extends('layout.user.master')
@section('content')

<style>
    body {
      background-color: #f8f9fa;
      color: #333;
      font-family: Arial, sans-serif;
    }

    .header {
      background-color: #023a5b;
      padding: 20px;
      text-align: center;
      color: #fff;
    }

    .logo {
      max-width: 200px;
      margin-bottom: 20px;
      width: 110px;
    }

    .tournament-image {
      max-width: 400px;
      margin: 0 auto;
      display: block;
      border: 5px solid #002a5c;
      border-radius: 10px;
    }

    .title {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    p {
      font-size: 18px;
      text-align: center;
      font-weight: bold;
    }
  </style>

  <header class="header">
    <img src="img/logo.jpg" alt="Logo del Festival Nacional MINIBASKET" class="logo">
    <h1 class="title">Festival Nacional MINIBASKET</h1>
  </header>

  <div class="container">
    <h2 class="text-center">¡Bienvenidos!</h2>
    <p>Podrás ver toda la información de los torneos de <span style="color: #002a5c;">MINIBASKET</span>.</p>

    <img src="img/inscripciones.jpg" alt="Imagen del torneo" class="tournament-image">
  </div>

@endsection
