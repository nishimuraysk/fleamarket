<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PaymentController;

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
Route::get('/comment/{item_id}', [CommentController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/user/{user_id}', [ItemController::class, 'mylist']);
    Route::post('/favorite', [FavoriteController::class, 'create']);
    Route::post('/favorite/delete', [FavoriteController::class, 'delete']);
    Route::post('/comment', [CommentController::class, 'create']);
    Route::post('/comment/delete', [CommentController::class, 'delete']);
    Route::get('/mypage', [MypageController::class, 'index']);
    Route::get('/mypage/purchase', [MypageController::class, 'purchase']);
    Route::get('/mypage/profile', [MypageController::class, 'profile']);
    Route::post('/mypage/profile', [MypageController::class, 'update']);
    Route::get('/sell', [SellController::class, 'index']);
    Route::post('/sell', [SellController::class, 'create']);
    Route::get('/purchase/{item_id}', [PurchaseController::class, 'index']);
    Route::post('/purchase/{item_id}', [PurchaseController::class, 'action']);
    Route::get('/thanks', function () {
        return view('thanks');
    });
    Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'address']);
    Route::post('/purchase/address/{item_id}', [PurchaseController::class, 'update']);
    Route::prefix('payment')->name('payment.')->group(function () {
        Route::get('/create/{item_id}', [PaymentController::class, 'create'])->name('create');
        Route::post('/store/{item_id}', [PaymentController::class, 'store'])->name('store');
    });
});
