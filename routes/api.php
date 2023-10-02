<?php

use App\Http\Controllers\api\LoginController as Login;
use App\Http\Controllers\api\UserController as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [Login::class, 'login']);
Route::post('register', [Login::class, 'register']);

Route::prefix('student')->middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [Login::class, 'logout']);

    Route::post('user', [User::class, 'detail']);
    Route::post('user/update', [User::class, 'detail']);
});
