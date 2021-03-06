<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\APIDocsController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/book', [BookController::class, 'getBook'])->middleware("cors");;
Route::post('/book', [BookController::class,'createBook'])->middleware("cors");;
Route::patch('/book/{id}', [BookController::class, 'editBook'])->middleware("cors");;
Route::delete('/book/{id}', [BookController::class, 'deleteBook'])->middleware("cors");;
Route::post('/thisbook', [BookController::class, 'findThisBook'])->middleware("cors");;
Route::get('/book/{id}', [BookController::class, 'getAssignBook'])->middleware("cors");;

