<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPostCreateForm()
    {
        return 'I am basic html form';
    }
}
