<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");
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

Route::get('/book', [BookController::class, 'getBook']);
Route::post('/book', [BookController::class,'createBook']);
Route::patch('/book/{id}', [BookController::class, 'editBook']);
Route::delete('/book/{id}', [BookController::class, 'deleteBook']);
Route::post('/thisbook', [BookController::class, 'findThisBook']);
Route::get('/book/{id}', [BookController::class, 'getAssignBook']);

