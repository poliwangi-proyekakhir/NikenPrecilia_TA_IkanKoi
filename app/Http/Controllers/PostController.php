<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'authors']))
                ->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)   # => 31. => sebelumnya $slug diganti id  # 37. Diganti lagi dari $id ke $post, jadi diikat modelnya namanya juga Route Model Binding (jadi Route nya tadi ngirimin model ke controller diikat disini)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post   # 39. gaperlu kita query dan kalau kita jalanin di webnya otomatis jalan. 
        ]);
    }
}
