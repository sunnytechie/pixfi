<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $images = Picture::orderBy('id', 'desc')->paginate(20);
        return view('dashboard', compact('images'));
    }
    
    public function create() {
        return view('post.new');
    }

    
}
