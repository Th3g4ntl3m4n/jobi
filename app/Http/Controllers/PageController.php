<?php

namespace App\Http\Controllers;



use App\Models\companies;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request) 
    {
       
        $companies = companies::latest()->paginate();
        return view('home',['companies' => $companies]);
        

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
