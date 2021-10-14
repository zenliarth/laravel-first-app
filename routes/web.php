<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/products', [EventController::class, 'products']);
Route::get('/products/{id}', [EventController::class, 'productsId']);
/* Route::get('/produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
}); */
Route::get('contact', [EventController::class, 'contact']);
Route::get('login', [EventController::class, 'login']);
