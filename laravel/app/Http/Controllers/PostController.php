<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function renderPosts()
    {
        $rows = Post::where('active', '=', 1)->orderBy('created_at')->limit(5)->get();
        return view('welcome', ['rows' => $rows]);
    }
    public function showAdmin(){
        $rows = Post::all();
        return view('admin', ['rows' => $rows]);
    }
    public function cu(Request $request){
        if ($request->input('id')){
            Post::where('id', '=', $request->input('id'))->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'author' => $request->input('author'),
                'active' => $request->input('active')
            ]);
            return redirect()->route('admin');
        }
        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'author' => $request->input('author'),
            'active' => $request->input('active')
        ]);
        return redirect()->route('admin');
    }
    public function delete(Post $post){
        $post->delete();
        return redirect()->route('admin');
    }
}
