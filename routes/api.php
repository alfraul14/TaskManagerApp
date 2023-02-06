<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TaskController;

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
Route::get('tasks',[TaskController::class,'index']);
Route::post('tasks',[TaskController::class,'store']);
Route::get('tasks/{task}',[TaskController::class,'show']);
Route::put('tasks/{task}',[TaskController::class,'update']);
Route::delete('tasks/{task}',[TaskController::class,'destroy']);
Route::get('searchTask/{task}',[TaskController::class,'search']);