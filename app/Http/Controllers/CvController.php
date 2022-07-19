<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cv;
use App\Models\Academy;
use App\Models\Experience;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Cv $cv)
    {
        return view('cvs.create', ['cv'=>$cv]);
    }

    

    public function store(Request $request)
    {
        
          //Validacion de formulario, para que no genere error si se va en blanco
          $user_id= auth()->id();
            
          $request->validate([            
            'phone' => 'required',
            'ciudad' => 'required',
            'DniNumber' => 'required',
            
        ]);

        /*
        $cv = $request->user()->cvs()->create([
            'user_id' => $user_id,
            'phone' => $request ->phone,
            'ciudad' => $request ->ciudad,
            'DniNumber' => $request ->DniNumber,

        ]);*/

        $cv = new Cv();
        $cv->user_id = $user_id;
        $cv->phone = $request ->phone;
        $cv->ciudad = $request ->ciudad;
        $cv->DniNumber = $request ->DniNumber;
        $cv->save();
        
       
/*
        $academys = $request->user()->academys()->create([
            
            'school' =>  $request ->school,
            'schooltitlel' => $request ->schooltitle,
            'endyear' => $request ->endyear,
            'years' => $request ->years,
        ]);
       */

      $academys = new Academy();
      $academys->user_id = $user_id;
      $academys->school =$request ->school;
      $academys->schooltitle =$request ->schooltitle;
      $academys->endyear =$request ->endyear;
      $academys->years =$request ->years;
      $academys->save();


      $experiences = new Experience();
      $experiences->user_id = $user_id;
      $experiences->company = $request ->company;
      $experiences->position = $request ->position;
      $experiences->yearstartwork = $request ->yearstartwork;
      $experiences->yearfinishtwork = $request ->yearfinishtwork;
      $experiences->labsyears = $request ->labsyears;
      $experiences->save();


        return view('dashboard')->with('cv', $cv, 'academys', $academys, 'experiences',$experiences);
       
    }

    public function show($id)
    {
       
        $user = User::find($id);
        $cv = Cv::where("user_id", '=', $id)->get();
        $academys = Academy::where("user_id", '=', $id)->get();
        $experiences = Experience::where("user_id", '=', $id)->get();
      
        return view('cvs/show')->with('user', $user)->with('cv', $cv)->with('academys', $academys)->with('experiences', $experiences);
        
      
    }

    public function ShowAllUsers(){
        $showallusers = User::where("type", '=', 1)->get();       
        return view('dashboard.showallusers')->with('showallusers', $showallusers);
    }

    public function ShowAllCompanies(){
        $showallcompanies = User::where("type", '=', 2)->get();       
        return view('dashboard.showallusers')->with('showallusers', $showallcompanies);
    }


}
