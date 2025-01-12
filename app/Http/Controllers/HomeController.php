<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $popularPosts = Post::orderBy('views', 'desc')->limit(4)->get();
        $recentPosts = Post::orderBy('published_at','desc')->limit(5)->get();
        return view('main', compact('popularPosts', 'recentPosts'));
    }


}
