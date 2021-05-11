<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::findOrFail(1); // comment có id = 1 có user_id = 1
        if (Gate::allows('edit_post', $post)) {
            echo "Ban co quyen chinh sua comment";
        } else {
            echo "Ban khong co quyen chinh sua comment";
        }
    }
}
