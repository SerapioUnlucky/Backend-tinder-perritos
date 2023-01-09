<?php

use App\Http\Controllers\InteraccionController;
use App\Http\Controllers\PerroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/perros')->group(function () use ($router) {

    $router->post('/AgregarPerro', [PerroController::class, 'createPerro']);
    $router->get('/ObtenerPerros', [PerroController::class, 'getPerros']);
    $router->put('/ActualizarPerro/{id}', [PerroController::class, 'putPerro']);
    $router->delete('/EliminarPerro/{id}', [PerroController::class, 'deletePerro']);

});

Route::prefix('/interaccion')->group(function () use ($router) {

    $router->post('/AgregarInteraccion', [InteraccionController::class, 'createInteraccion']);
    $router->put('/CambiarPreferencia/{id}', [InteraccionController::class, 'putPreferencia']);
    $router->get('/ObtenerPerroAceptados', [InteraccionController::class, 'getAceptados']);
    $router->get('/ObtenerCandidato', [InteraccionController::class, 'getCandidato']);
    $router->get('/ObtenerPerroRechazados', [InteraccionController::class, 'getRechazado']);
    $router->get('/ObtenerInteracciones', [InteraccionController::class, 'getInteracciones']);
    $router->get('/ObtenerInteraccion/{id}', [InteraccionController::class, 'getInteraccion']);
});
