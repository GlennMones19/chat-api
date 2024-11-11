<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('messages', MessageController::class);
Route::get('messages', [MessageController::class, 'index']);
Route::get('showmessage/{id}', [MessageController::class, 'show']);
Route::post('addmessage', [MessageController::class, 'store']);
Route::put('updatemessage/{id}', [MessageController::class, 'update']);
Route::delete('deletemessage/{id}', [MessageController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::get('show_user/{id}', [UserController::class, 'show']);