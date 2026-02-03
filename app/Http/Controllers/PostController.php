<?php

namespace App\Http\Controllers;
use  App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function uploadBlog(Request $req){
        $req->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $req->title,
            'content' => $req->content

        ]);

        return redirect('/')->with('success', 'Post added Successfully!');
    }

    function postlist(){
      $posts =  Post::all();

        return view('post-list', compact('posts'));
    }

    function show($id){
        $post = Post::findOrFail($id);

        return view('single-post', compact('post'));
    }

    function edit(Post $post){
        return view('edit-post', compact('post'));
    }

    function update(Request $req, Post $post){
        $req->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update([
            'title' => $req->title,
            'content'=> $req->content
        ]);
        
       return redirect()->route('post.list', $post->id)->with('success', 'Post updated successfully'); 
    }
    
     function destroy(Post $post){
        $post->delete();

        return redirect()->route('post.list')->with('success', 'Post Delete Successfully');
     }
    }
