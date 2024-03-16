<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetricController;
use App\Http\Controllers\MetricScoreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;





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

Route::get('metrics', [MetricController::class, 'getMetrics']);
Route::get('metrics/chart', [MetricController::class, 'getChartData']);
Route::get('metrics/adminChart', [MetricController::class, 'getAdminChartData']);
Route::get('categories', [CategoryController::class, 'getCategoriesForRole']);
Route::get('metrics/score', [MetricScoreController::class, 'getScoreForUser']);
Route::get('roles', [RoleController::class, 'getRoles']);
Route::get('users', [UserController::class, 'getUsers']);



Route::post('metrics/score', [MetricScoreController::class, 'updateScore']);




