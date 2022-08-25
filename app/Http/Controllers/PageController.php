<?php

namespace App\Http\Controllers;



use App\Models\offers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request) 
    {
        // post y todo lo que necesite llevar a la vista, sólo 1 controlador por vista
        $posts = Post::All();       
        $offers = offers::latest()->paginate();
        return view('home',['offers' => $offers], ['posts' => $posts]);
        

    }

    public function companies()
    {
        return view('companies');
    }

    public function salarios()
    {
        
    }

    /*
    public function index()
    {
        $user_type= Auth::user()->type;  
        return view('dashboard', compact('user_type'));
    }
   */

}
