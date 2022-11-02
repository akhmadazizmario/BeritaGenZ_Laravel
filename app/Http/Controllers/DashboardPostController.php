<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Post;
use App\Models\category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.posts.create', [
            'categories' => category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:2024',
            'body' => 'required'
        ]);

        //--- create image ke folder post-images--///
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'postingan anda berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //Menampilkan Data
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //---Menampilkan Data ------//
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @rphp eturn \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //-- Eksekusi update ---//
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:2024',
            'body' => 'required'
        ]);
        //---- Image delete --------//
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            //--- mengupdate gambar ---//
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        ////-----------------///
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Post::where('id', $post->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'postingan anda berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //---Image Delete---//
        if ($post->image) {
            Storage::delete($post->image);
        }
        //----------------//
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('destroy', 'Data Berhasil di hapus');
    }
}
