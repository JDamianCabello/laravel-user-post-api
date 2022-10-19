<?php

//use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\PostApiController;
use App\Http\Controllers\UserApiController;
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


Route::controller(UserApiController::class)->prefix('users')->group(function () {
    Route::get('/', 'index')->name('user_list');
});

Route::controller(PostApiController::class)->prefix('post')->group(function () {
    Route::get('top', 'topPost')->name('post_top');
    Route::get('{id}', 'find')->name('post_find');
});
