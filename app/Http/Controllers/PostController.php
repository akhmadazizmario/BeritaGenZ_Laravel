<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //Function title klik
        $title = '';
        if (request('category')) {
            $category =  category::firstWhere('slug', request('category'));
            $title = 'in' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'by ' . $author->name;
        }
        //end 

        //view posts
        return view(
            'posts',
            [
                "title" => "All Posts " . $title,
                "active" => 'posts',
                "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString() //menyeleksi post sesuai latest atau yang terbaru
                //kunci pagination ada di folder app/providers/AppServicesProvider.php
            ]
        );
    }

    public function show(Post $post) # Post itu nama Modulenya
    {
        return view('post', [
            "title" => "Single Post", # judul title web
            "active" => 'posts',
            "post" => $post  # menampilkan data di variabel $post
        ]);
    }
}
