<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CrudUsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\equiposController;
use App\Http\Controllers\entrenadorController;

Route::post('/form/submit', [RegistrationController::class, 'RegistrationController'])->name('form.submit');

Route::get('/', function () {
    return view('index');
});

Route::get('/login/register', function () {
    return view('register');
})->name('register');

//Login
Route::get('/login', function () {
    return view('login');
})->name('login');
//funcion de logueo
Route::post('/login/procesar', [LoginController::class, 'index'])->name('loginProceso');
//funcion de logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



//Administrador CRUD-usuarios
Route::get('/admin-crudUsuarios', [CrudUsuarioController::class, 'index'])->name('adminCrudUsuarios');
//Administrador CRUD-administradores
Route::get('/admin-crudAdministradores', [CrudUsuarioController::class, 'index2'])->name('adminCrudAdministradores');
//Administradir CRUD-usuarios delete
Route::delete('/admin-crudUsuarios/{id}', [CrudUsuarioController::class, 'destroy'])->name('adminCrudUsuarios.destroy');
//Administrador CRUD-usuarios edit
Route::put('/usuarios/{id}/edit', [CrudUsuarioController::class, 'edit'])->name('adminCrudUsuarios.edit');
// Ruta para procesar la actualización de un usuario específico
Route::put('/usuarios/{id}', [CrudUsuarioController::class, 'update'])->name('adminCrudUsuarios.update');



//pruebas
Route::get('/usuario', [equiposController::class, 'index'])->name('usuarios');
Route::get('/entrenadores', [entrenadorController::class, 'index'])->name('entrenadores');

Route::get('/publicaciones', function () {
    return view('user.publicaciones');
})->name('publicaciones');

Route::get('/clasificaciones', function () {
    return view('user.clasificaciones');
})->name('clasificaciones');
Route::get('/error404', function () {
    return view('error404');
})->name('error404');
Route::get('/inicio', function () {
    return view('user.inicio');
})->name('inicio');





//Template
Route::get('/template', function () {
    return view('template.index');
});
Route::get('/template-registro', function () {
    return view('template.registro');
})->name('registro');
Route::get('/template-tables', function () {
    return view('template.tables');
})->name('tables');
/*Route::get('/template-login', function () {
    return view('template.login');
})->name('login');*/
Route::get('/template-404', function () {
    return view('template.404');
})->name('404');
Route::get('/template-buttons', function () {
    return view('template.buttons');
})->name('buttons');
Route::get('/template-cards', function () {
    return view('template.cards');
})->name('cards');
Route::get('/template-charts', function () {
    return view('template.charts');
})->name('charts');
Route::get('/template-forgot', function () {
    return view('template.forgot-password');
})->name('forgot');
Route::get('/template-utilities-animation', function () {
    return view('template.utilities-animation');
})->name('animations');
Route::get('/template-utilities-border', function () {
    return view('template.utilities-border');
})->name('borders');
Route::get('/template-utilities-color', function () {
    return view('template.utilities-color');
})->name('colors');
