<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    // HALAMAN WELCOME
    public function welcome()
{
    $posts = Post::data();
    return view('welcome', compact('posts'));
}

    // HALAMAN HOME
    public function home()
    {
        // gunakan data() jika ada
        if (method_exists(Post::class, 'data')) {
            $posts = Post::data();
        } else {
            // fallback aman untuk model non-Eloquent
            $posts = [];
        }

        // hitung total
        // jika tidak ada Eloquent, hitung manual
        $totalposts = is_array($posts) ? count($posts) : 0;

        return view('home', compact('posts', 'totalposts'));
    }

    // HALAMAN DETAIL
    public function show($id)
    {
        if (method_exists(Post::class, 'caridata')) {
            $post = Post::caridata($id);
        } else {
            $post = null;
        }

        if (!$post) {
            abort(404);
        }

        return view('post', compact('post'));
    }
     // halaman tentang
    public function about()
    {
        return view('about');
    }
}
