<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Companies;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{


    public function create(Companies $companies)
    {
        return view('companies.create', ['companies'=>$companies]);
    }


    public function store(Request $request)
    {
        
          //Validacion de formulario, para que no genere error si se va en blanco
          $user_id= auth()->id();
            
          /*
          $request->validate([            
            'phone' => 'required',
            'ciudad' => 'required',
            'DniNumber' => 'required',
            
        ]);*/

     

        $companies = new Companies();
        $companies->user_id = $user_id;
        $companies->phone = $request ->phone;
        $companies->city = $request ->city;
        $companies->country = $request ->country;
        $companies->web = $request ->web;
        $companies->address = $request ->address;
        $companies->description = $request ->description;
        $companies->save(); 
        return view('dashboard')->with('companies', $companies);
       
    }


    public function show($id)
    {
       
        $user = User::find($id);
        $companies = Companies::where("user_id", '=', $id)->get();             
        return view('companies/show')->with('user', $user)->with('companies', $companies);
        
      
    }
}
