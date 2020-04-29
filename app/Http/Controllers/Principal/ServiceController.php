<?php

namespace App\Http\Controllers\Principal;

use App\Models\Blog\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function show()
    {
        $post = Post::service()->where('title', 'asc');
        $more = Post::where('category_id', $post->category_id)->limit(4)->inRandomOrder()->get();


        return view('principal.servicos', compact('post', 'more'));
    }
}
