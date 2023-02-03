<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\PostController;

Route::get('', [HomeController::class, 'index']);