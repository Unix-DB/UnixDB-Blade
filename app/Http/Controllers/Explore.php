<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Explore extends Controller
{
    public function view()
    {
        return view('explore', [
            'posts' => Post::query(),
        ]);
    }
}
