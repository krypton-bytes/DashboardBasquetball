<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Error 404</title>
<style>
    body {
    margin: 0;
    padding: 0;
    background-color: #1a1a1a; }

  .conten {
    position: fixed;
    top: 4em;
    width: 100%;
    text-align: center; }
    .conten__img {
      width: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center; }
      .conten__img img {
        width: 300px;
        display: block;
        -webkit-animation: animates 2s linear infinite alternate;
        animation: animates 2s linear infinite alternate; }
    .conten__number {
      position: absolute;
      font-size: 5.5rem;
      font-family: "Gill Sans", sans-serif;
      font-weight: 600;
      top: 9rem;
      color: rgba(255, 255, 255, 0.5);
      -webkit-animation: animatestext 2s linear infinite alternate;
      animation: animatestext 2s linear infinite alternate; }
    .conten__error {
      color: #ffffff;
      width: 50%;
      margin: 2em auto;
      font-family: "Gill Sans", sans-serif; }
    .conten__button {
      background-color: #0077d8f4;
      color: #ffffff;
      font-weight: 600;
      font-family: "Gill Sans", sans-serif;
      padding: 0.8em 1em;
      border-radius: 50px;
      text-decoration: none; }

  @-webkit-keyframes animates {
    0% {
      -webkit-transform: translateX(5%);
      transform: translateX(5%); }
    100% {
      -webkit-transform: translateX(-5%);
      transform: translateX(-5%); } }

  @keyframes animates {
    0% {
      -webkit-transform: translateX(5%);
      transform: translateX(5%); }
    100% {
      -webkit-transform: translateX(-5%);
      transform: translateX(-5%); } }

  @-webkit-keyframes animatestext {
    0% {
      -webkit-transform: rotate(5deg);
      transform: rotate(5deg); }
    100% {
      -webkit-transform: rotate(-5deg);
      transform: rotate(-5deg); } }

  @keyframes animatestext {
    0% {
      -webkit-transform: rotate(5deg);
      transform: rotate(5deg); }
    100% {
      -webkit-transform: rotate(-5deg);
      transform: rotate(-5deg); } }
</style>
    </head>

<body>
    <div class="conten">
        <div class="conten__img">
            <img src="img/404.png" alt="">
            <p class="conten__number">
                404
            </p>
        </div>
        <div class="conten__Description">
            <p class="conten__error">
                Disculpa aun estamos configurando algunas partes, prueba con otra cosa.
            </p>
            <a href="{{ route('inicio') }}" class="conten__button">IR AL INICIO DE LA PAGINA</a><br>
            <br>
            <br>
            <i class="conten__error">Animación hecha por Fernando Brayan Mejía Gómez</i>
        </div>
    </div>
</body>

</html>
