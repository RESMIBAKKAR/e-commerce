<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestAPIController;
use App\Http\Controllers\AuthApiController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json([
        'success' => true,
        'user' => $request->user()
    ]);
});

Route::get('test', [TestAPIController::class, 'test']);

Route::post('login', [AuthApiController::class, 'login']);
