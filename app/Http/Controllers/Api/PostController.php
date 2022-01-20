<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        $array = [
            'data' => $posts,
            'message' => 'ok',
            'status' => 200,

        ];

        $msg = ["ok"];
        return response($array);
    }
}
