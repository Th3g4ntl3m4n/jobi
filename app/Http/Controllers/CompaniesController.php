<?php



namespace App\Http\Controllers;

use App\Models\Applyes;
use App\Models\companies;
use App\Models\User;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
       return view('home',[
        'companies' => companies::latest()->paginate
       ]);
    }

    public function create(companies $companies)
    {
        
        return view('Comp.create', ['companies'=>$companies]);
    }

    public function store(Request $request)
    {
        
          //Validacion de formulario, para que no genere error si se va en blanco
          $user_id= auth()->id();
         
        $companies = new companies();
        $companies->user_id = $user_id;        
        $companies->ofert_id = $request ->jobtitle;
        $companies->jobcategory = $request ->jobcategory;
        $companies->companyname = $request ->companyname;
        $companies->companyemail = $request ->companyemail;
        $companies->companyweb = $request ->companyweb;
        $companies->companylocation = $request ->companylocation;
        $companies->jobtype = $request ->jobtype;
        $companies->jobtags = $request ->jobtags;
        $companies->jobsalary = $request ->jobsalary;
        $companies->jobexperience= $request ->jobexperience;
        $companies->jobdescription= $request ->jobdescription;        
        $companies->save();
     
        


        return view('Comp.create')->with('companies', $companies );
        
    }

    public function show($id)
    {
       
        $user = User::find($id);
       
        $companies = companies::where("user_id", '=', $id)->get();
         
        return view('Comp/show')->with('user', $user)->with('companies', $companies);
        
      
    }

    public function showjob(companies $job)
    {
        return $job;

    }

    public function ShowAllJobs ()

    {

        $jobs = companies::all();       
        return view('dashboard.showalljobs')->with('jobs', $jobs);
       
            
           
    }
    

    public function showJobDetails($id)
    {
        $user_id= auth()->id();
       
        $details = companies::find($id);  
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
