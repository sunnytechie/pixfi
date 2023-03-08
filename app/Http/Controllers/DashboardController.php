<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create() {
        return view('post.new');
    }

    public function show() {
        return view('post.show');
    }
}
