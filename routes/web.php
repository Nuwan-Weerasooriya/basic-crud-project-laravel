<?php

use App\Http\Controllers\post\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'showPostCreateForm']);
