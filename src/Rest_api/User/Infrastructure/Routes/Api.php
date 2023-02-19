<?php

use Illuminate\Support\Facades\Route;
use Src\Rest_api\User\Infrastructure\Controllers;

Route::get('/', UserListAllWithPostController::class);

Route::get('/list', UserListAllController::class);