<?php

use App\Http\Controllers\MarkController;
use App\Http\Controllers\WarehouseOrderController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//WarehouseOrderContoller

Route::post('/warehouserequest',[WarehouseOrderController::class,'order']);
Route::get('/orderfulfilled/{neworder}',[WarehouseOrderController::class,'orderfulfilled']);

//marksroute

Route::post('/mark',[MarkController::class,'score']);