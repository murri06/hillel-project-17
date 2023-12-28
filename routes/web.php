<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/category/list', [CategoryController::class, 'list']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::get('/category/update', [CategoryController::class, 'update']);
Route::get('/category/delete', [CategoryController::class, 'delete']);
