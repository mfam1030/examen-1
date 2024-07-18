<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ArbolController;
use App\Http\Controllers\EspecieController;

Route::resource('arboles', ArbolController::class);
Route::resource('especies', EspecieController::class);

Route::get('especies/{id}/cantidad-arboles', [EspecieController::class, 'cantidadArboles'])->name('especies.cantidad-arboles');
Route::get('especies-en-extincion', [EspecieController::class, 'especiesEnExtincion'])->name('especies.en-extincion');
Route::get('arboles-no-señalizados', [ArbolController::class, 'arbolesNoSeñalizados'])->name('arboles.no-señalizados');
