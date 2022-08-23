<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){

        return view('home', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function create(Post $post){

        return view('posts.create', ['post'=> $post]);

    }
  

    public function store(Request $request){

        //Validacion de formulario, para que no genere error si se va en blanco

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'body' => 'required',
        ]);

        $post = $request->user()->posts()->create([
            'title' =>  $request ->title,
            'slug' => $request ->slug,
            'body' => $request ->body,

        ]);


        return redirect()->route('posts.edit', $post);

    }

    public function edit(Post $post){

        return view('posts.edit',['post'=> $post]);

    }

    public function update(Request $request, Post $post){

        
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug', $post->id,
            'body' => 'required',
        ]);

        $post->update([

            'title' => $request ->title,
            'slug' => $request ->slug,
            'body' => $request ->body,
        ]);


        return redirect()->route('posts.edit', $post);

    }

    
    public function destroy(Post $post){

        $post->delete();

        return back();        

    }

    public function show(){
        
            $posts = Post::all();              
            return view('home') ->with('posts', $posts);
        
    }

   

  
}
