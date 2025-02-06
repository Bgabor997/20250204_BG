<?php

use App\Http\Controllers\Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", [
    Controller::class,
    "getUsers"
]);

Route::post("/users", [
    Controller::class,
    "createUser"
]);

Route::put("/user/{user}", [
    Controller::class,
    "updateUser"
]);

Route::delete("/user/{user}", [
    Controller::class,
    "deleteUser"
]);