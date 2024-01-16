<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FavoriteController;

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

Route::get('/', [ItemController::class, 'index']);
Route::get('/search', [ItemController::class, 'search']);
Route::get('/category/{category_id}', [ItemController::class, 'category']);
Route::get('/item/{item_id}', [ItemController::class, 'detail']);


Route::middleware('auth')->group(function () {
    Route::get('/user/{user_id}', [ItemController::class, 'mylist']);
    Route::post('/favorite', [FavoriteController::class, 'create']);
    Route::post('/favorite/delete', [FavoriteController::class, 'delete']);
});
