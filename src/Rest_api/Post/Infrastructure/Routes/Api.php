<?php

use Illuminate\Support\Facades\Route;
use Src\Rest_api\Post\Infrastructure\Controllers;


Route::get('/top', PostListByTopRatingController::class);
Route::get('/{id}', PostFindByIdController::class);