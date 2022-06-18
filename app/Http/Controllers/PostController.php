<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posting(Request $request)
    {

        //Category Request Details
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

        // Post Request Details
        $posts = $request->posts;
        foreach ($posts as $one) {
            $two = new Post();
            $two->category_id = $category->id;
            $two->post_name = $one['post_name'];
            $two->save();
        }

        // $post = new Post();
        // $post->category_id = $category->id;
        // $post->post_name = $request->post_name;
        // $post->save();
    }
}
