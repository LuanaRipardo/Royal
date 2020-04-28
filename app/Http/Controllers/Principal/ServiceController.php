<?php

namespace App\Http\Controllers\Principal;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function show()
    {
        $services = Post::orderBy('title', 'asc')->paginate(6);
        return view('principal.servicos', compact('services'));
    }
}
