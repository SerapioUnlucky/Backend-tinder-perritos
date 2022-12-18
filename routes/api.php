<?php

use App\Http\Controllers\PerroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/perros')->group(function () use ($router) {

    $router->post('/AgregarPerro', [PerroController::class, 'createPerro']);
    $router->get('/ObtenerPerros', [PerroController::class, 'getPerros']);
    $router->put('/ActualizarPerro', [PerroController::class, 'putPerro']);
    $router->delete('/EliminarPerro', [PerroController::class, 'deletePerro']);

});
