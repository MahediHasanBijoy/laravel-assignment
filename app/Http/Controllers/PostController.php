<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function postsWithCategory(){
        $posts = Post::with('category')->get();

        return view('posts', compact('posts'));
    }

    public function countPostByCategory(){
        $categoryId = 2;
        $postCount = Post::getPostsCountByCategory($categoryId);

        return $postCount;
    }

    public function deletePost($id)
    {
        $post = Post::find($id);

        // Soft delete the post
        $post->delete();
        
    }

    public function softDeletedPosts(){
        $posts = Post::getSoftDeletedPosts();
        return $posts;
    }
}
