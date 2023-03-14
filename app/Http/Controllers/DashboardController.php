<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $images = Picture::orderBy('id', 'desc')->paginate(30);
        return view('dashboard', compact('images'));
    }
    
    public function create() {
        return view('post.new');
    }

    public function search(Request $request)
    {
        
        $request->validate([
            'query' => 'required|min:1',
            'category' => '',
        ]);

        $searchQuery = $request->query;

        //dd($request->all());

        $query = $request->input('query');
        $category = $request->input('category');

        if ($category) {
            $posts = Post::search($query)
                ->where('category', $category)
                ->paginate(30);
        } else {
            $posts = Post::search($query)
                ->paginate(30);
        }

        //dd($posts);

        return view('search', compact('posts', 'searchQuery'));
    }

    
}
