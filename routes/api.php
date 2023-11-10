<?php

use App\Http\Controllers\AnswerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HTTP\COntrollers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ThemeController;

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

Route::get('/hello', function () {
    return 'hello my friend';
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/form/{theme_id}', [FormController::class, 'getForm']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/answer', [AnswerController::class, 'postAnswer']);
    Route::get('/answer/{answerId}', [AnswerController::class, 'getAnswerById']);
    Route::get('/theme', [ThemeController::class, 'getTheme']);
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
