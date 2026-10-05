<?php

use App\Http\Controllers\post\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'showPostCreateForm']);

Route::post('/create-post', [PostController::class, 'createPost'])->name('create');
