<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    });
 use App\Http\Controllers\ScategorieController;

    Route::middleware('api')->group(function () {
    Route::resource('scategories', ScategorieController::class);
    });
    Route::get('/scat/{idcat}',
    [ScategorieController::class,'showSCategorieByCAT']);

    
    use App\Http\Controllers\ArticleController;
    
    Route::middleware('api')->group(function () {
        Route::resource('articles', ArticleController::class);
        });