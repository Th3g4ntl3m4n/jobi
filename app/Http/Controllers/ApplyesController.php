<?php

namespace App\Http\Controllers;

use App\Models\Applyes;
use App\Models\offers;
use App\Models\User;




use Illuminate\Http\Request;

class ApplyesController extends Controller
{
    public function store(Request $request) {
        
        $user_id= auth()->id();

        //$_REQUEST todo lo que sea con esta variable es Ajax
        $ofert_id= $_REQUEST["id_job"];
        
        $result = "Apply Done!";

        $applys = new Applyes();
        $applys->user_id = $user_id;        
        $applys->ofert_id = $ofert_id;
        $applys->state = 0;
        $applys->commets = 0;
       
        $applys->save();

      return response()->json($result);
    }

    public function ShowApplystoOfert(){

    }
}
