<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
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
    return view('welcome');
});
Route::get('/ingresar-producto', [ProductoController::class, 'create']);
Route::post('/ingresar-producto', [ProductoController::class, 'store']);
Route::get('/ingresar-categoria', [CategoriaController::class, 'create']);
Route::post('/ingresar-categoria', [CategoriaController::class, 'store']);
