<?php



namespace App\Http\Controllers;

use App\Models\Applyes;
use App\Models\offers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        
     return view('home',[
        'offers' => offers::latest()->paginate
       ]);
    }

    public function create(offers $offers)
    {
        
        return view('Comp.create', ['offers'=>$offers]);
    }

    public function store(Request $request)
    {
        
          //Validacion de formulario, para que no genere error si se va en blanco
          $user_id= auth()->id();
         
        $offers = new offers();
        $offers->user_id = $user_id;        
        $offers->jobtitle= $request ->jobtitle;
        $offers->jobcategory = $request ->jobcategory;
        $offers->companyname = $request ->companyname;
        $offers->companyemail = $request ->companyemail;
        $offers->companyweb = $request ->companyweb;
        $offers->companylocation = $request ->companylocation;
        $offers->jobtype = $request ->jobtype;
        $offers->jobtags = $request ->jobtags;
        $offers->jobsalary = $request ->jobsalary;
        $offers->jobexperience= $request ->jobexperience;
        $offers->jobdescription= $request ->jobdescription;
        $offers->applybefore= $request ->applybefore;         
        $offers->requirements= $request ->requirements;   
        $offers->save();
     
        


        return view('Comp.create')->with('offers', $offers );
        
    }

    public function show($id)
    {
       
        $user = User::find($id);
       
        $offers = offers::where("user_id", '=', $id)->get();
         
        return view('Comp/show')->with('user', $user)->with('offers', $offers);
        
      
    }

    public function showjob(offers $job)
    {
        return $job;

    }

    public function ShowAllJobs ()

    {

        $jobs = offers::all();       
        return view('dashboard.showalljobs')->with('jobs', $jobs);
       
            
           
    }
    

    public function showJobDetails($id)
    {
        $user_id= auth()->id();
       
        $details = offers::find($id);  
        $apply = Applyes::where("user_id", '=', $user_id)->where("ofert_id", '=', $id)->get();
        //$applys = Applys::where("ofert_id", '=', $id)->get();        
        // applay_flag es cero por defecto, quiere decir que no hay una aplicación del usuario
        // a la oferta
        $apply_flag = 0;
        //si el array applyes trae 1 o más atributos, 
        // quiere decir que si hay una aplicación del usuario para esta oferta
        if(count($apply)>0){
        $apply_flag = 1;
        }
        
        return view('details')->with('details', $details)->with('apply_flag', $apply_flag);
      
    }


    
}
