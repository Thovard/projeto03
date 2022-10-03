<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

route::get('/empresa', [EmpresaController::class, 'Index'])->name('Empresas.Index');

Route::get('/', function () {
    return view('welcome');
});
