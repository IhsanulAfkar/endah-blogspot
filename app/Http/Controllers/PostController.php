<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query();
        if ($request->q) {
            $posts->where('title', 'ilike', '%' . $request->q . '%');
        }
        $category = null;
        if ($request->category) {
            $category = Category::find($request->category);
            $posts->where('category_id', $request->category);
        }
        $posts = $posts->paginate(10);
        $search = $request->q;
        return view('pages.post.index', compact('posts', 'search', 'category'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return to_route('home');
        }
        $post->views += 1;
        $post->save();
        return view('pages.post.show', compact('post'));
    }
}
