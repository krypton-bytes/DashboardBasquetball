@extends('layout.user.master')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Inscripciones ABIERTAS</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                    src="img/inscripciones.jpg" alt="...">
            </div>

            <p class="publication-text">
                IBIME abre sus inscripciones para que se puedan unir a los equipos de basquetball
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Inscribirse</a>,
                si te inscribes podras ver los partidos de los equipos de basquetboll de IBIME.
            </p>

            <a target="_blank" rel="nofollow" href="https://undraw.co/">Requisitos para inscribirse &rarr;</a>
            <br>        <br>
            <!-- Botón de Likes con corazones -->
            <div class="likes ">
                <button class="btn btn-like bg-danger text-light"><i class="fa fa-heart"></i> Me gusta</button>
                <span class="like-count">25</span> personas les gusta esto
            </div>
            <br>
            <!-- Comentarios -->
            <div class="comments bg-light text-dark p-4">
                <h5 class="comments-heading">Comentarios <i class="fa fa-comments"></i></h5>

                <!-- Ejemplo de comentario -->
                <div class="comment mb-3">
                    <h6 class="comment-user"><i class="fa fa-user"></i> Fernando</h6>
                    <p class="comment-text">¡Oh genial!</p>
                </div>

                <!-- Ejemplo de otro comentario -->
                <div class="comment mb-3">
                    <h6 class="comment-user"><i class="fa fa-user"></i> Azrel</h6>
                    <p class="comment-text">Me encanta. ¡Gracias por compartir la informacion!</p>
                </div>

                <!-- Agrega aquí más comentarios según sea necesario -->

                <!-- Formulario para escribir un comentario -->
                <form class="comment-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Escribe tu comentario"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>  Enviar comentario</button>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">IBIME inicia su página web</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                    src="img/logo.jpg" alt="...">
            </div>

            <p class="publication-text">
                IBIME creo su pagina web para poder incorporar nuevos miembros a sus equipos de basquetboll ¿que esperas?
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Inscribirse</a>,
                si te inscribes podras ver los partidos de los equipos de basquetboll de IBIME.
            </p>

            <a target="_blank" rel="nofollow" href="https://undraw.co/">Requisitos para inscribirse &rarr;</a>
            <br>        <br>
            <!-- Botón de Likes con corazones -->
            <div class="likes ">
                <button class="btn btn-like bg-danger text-light"><i class="fa fa-heart"></i> Me gusta</button>
                <span class="like-count">2</span> personas les gusta esto
            </div>
            <br>
            <!-- Comentarios -->
            <div class="comments bg-light text-dark p-4">
                <h5 class="comments-heading">Comentarios <i class="fa fa-comments"></i></h5>

                <!-- Ejemplo de comentario -->
                <div class="comment mb-3">
                    <h6 class="comment-user"><i class="fa fa-user"></i> Pedro Alcantara</h6>
                    <p class="comment-text">¡Gran trabajo en la página web!</p>
                </div>

                <!-- Ejemplo de otro comentario -->
                <div class="comment mb-3">
                    <h6 class="comment-user"><i class="fa fa-user"></i> Ismael Torres</h6>
                    <p class="comment-text">Me encantan las ilustraciones. ¡Gracias por compartirlas!</p>
                </div>

                <!-- Agrega aquí más comentarios según sea necesario -->

                <!-- Formulario para escribir un comentario -->
                <form class="comment-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Escribe tu comentario"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>  Enviar comentario</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
