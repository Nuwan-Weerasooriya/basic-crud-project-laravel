<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPostCreateForm()
    {
        return view('post.postForm');
    }
}
