<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getPostsByCategory($id)
    {
        $category = Category::find($id);
        $posts = $category->posts;
        return $posts;
    }

    public function latestPosts(){
        $categories = Category::all();
        return view('latest-posts', compact('categories'));
    }
}
