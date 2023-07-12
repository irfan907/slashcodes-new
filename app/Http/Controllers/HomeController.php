<?php

namespace App\Http\Controllers;

use App\Calculatedquote;
use Auth;
use App\Project;
use App\Post;
use App\Contact;
use App\Leaveform;
use App\Mail\CalculatedQuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use App\Mail\GetQuoteFormMail;
use App\Mail\LeaveApplicationFormMail;
use App\Quote;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index() {

        $projects = Project::with('tags')->where('status', '=', "ACTIVE")->where('featured', '=', "1")->orderBy('created_at', 'desc')->take(6)->get();
        
        return view('home', compact('projects'));
                	    
    }

    public function sitemap()
    {   
        $projects = Project::where('status', '=', "ACTIVE")->get();       
        $blogs = Post::where('status', '=', "published")->get();       
        return view('sitemap', compact('projects','blogs'));
    }

    public function sitemapxml()
    {
        $projects = Project::where('status', '=', "ACTIVE")->get();    
        $blogs = Post::where('status', '=', "published")->get();       
        return response()->view('layouts.sitemapxml', [
            'projects' => $projects,            
            'blogs' => $blogs 
        ])->header('Content-Type', 'text/xml');
    }
    
    public function contactForm(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $validationRules = array(

            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:80'],
            
            'g-recaptcha-response' => ['required','captcha'],

        );  

        $validatedData = $request->validate(
            $validationRules
        );
        $position = Location::get(request()->ip());

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;        
            $contact->message = $request->message;
            $contact->visitor=$position;
            $contact->save();

           
            $to = 'hamza@cynosuredesigns.co.uk';
            // $bcc = explode(',', $admin_emails);        
            // Mail::to($to)->bcc($bcc)->send(new ContactUsMail($contact));
            Mail::to($to)->send(new ContactUsMail($contact));

            // $to = $contact->email;
            // $admin_emails = 'hello@cynosuredesigns.co.uk,hamza@cynosuredesigns.co.uk';
            // $bcc = explode(',', $admin_emails);
            // Mail::to($to)->bcc($bcc)->send(new ContactUsMail($contact));
            
            return Redirect::route('thank-you');

    }
    public function leaveForm(Request $request)
    {
        $input = $request->all();
        
        $validationRules = array(

            'emp_name' => ['required', 'max:50'],
            'emp_email' => ['required', 'email', 'max:80'],
            'emp_phone' => ['required', 'max:50'],
            'reason' => ['required'],
            'date_from' => ['required', 'max:50'],
            'date_to' => ['required', 'max:50'],
            
            
            
            'g-recaptcha-response' => ['required','captcha'],

        );  

        $validatedData = $request->validate(
            $validationRules
        );

            $leaveData = new Leaveform();
            $leaveData->emp_name = $request->emp_name;
            $leaveData->emp_email = $request->emp_email;
            $leaveData->emp_phone = $request->emp_phone;        
            $leaveData->reason = $request->reason;        
            $leaveData->date_from = $request->date_from;        
            $leaveData->date_to = $request->date_to;        
            $leaveData->comments = $request->comments;
            $leaveData->save();

           
            $admin_emails = 'hamza@cynosuredesigns.co.uk,sharjeel@cynosuredesigns.co.uk';
            $to = explode(',', $admin_emails);
            Mail::to($to)->send(new LeaveApplicationFormMail($leaveData));
            
            return Redirect::route('thank-you');

    }

    public function saveQuoteForm(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'company'=>'required',
            'budget'=>'nullable',
            'comments'=>'nullable',
            'source'=>'required',
            'page_source'=>'nullable',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() .'#get-quote-form')
                    ->withErrors($validator)
                    ->withInput();
        }

        $position = Location::get(request()->ip());

        $quote=new Quote($request->all());
        $quote->visitor=$position;
        $quote->save();

        $admin_emails = 'hamza@cynosuredesigns.co.uk,sharjeel@cynosuredesigns.co.uk';
            $to = explode(',', $admin_emails);
            Mail::to($to)->send(new GetQuoteFormMail($quote));

        return Redirect::route('thank-you');
    }

    public function getCostCalculator(Request $request)
    {
        return view('cost-calculator');
    }

    public function saveCostCalculator(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        
        $position = Location::get(request()->ip());

        $quote=new Calculatedquote($request->all());
        $quote->custom_email=$request->email;
        $quote->visitor=$position;
        $quote->save();

        $admin_emails = 'hamza@cynosuredesigns.co.uk,sharjeel@cynosuredesigns.co.uk';
            $to = explode(',', $admin_emails);
            Mail::to($to)->send(new CalculatedQuoteMail($quote));

        return Redirect::route('thank-you');    
    }

    public function workList() {
        // $data = Contact::first();
        // return view('emails.contactus', compact('data'));


        $projects = Project::with('tags')->where('status', '=', "ACTIVE")->orderBy('created_at', 'desc')->get();
        
        return view('projects.index', compact('projects'));
                	    
    }

     public function workDetail($slug) {
        
        $project = Project::where('slug', '=', $slug)->where('status', '=', "ACTIVE")->firstOrFail();  
        
        // get previous project
        $previous = Project::where('id', '<', $project->id)->orderBy('id','desc')->first();

        // get next Project
        $next = Project::where('id', '>', $project->id)->orderBy('id')->first();

        if(!$project){    
            return abort(404);
        }else{
            $dirname = "./storage/projects/".$slug;
            $work_image = array();
            if(is_dir($dirname)){
                $work_image = $this->dirToArray($dirname);
            }            
            return view('projects.detail', compact('project','work_image','previous','next'));
        }
      
    }

    public function dirToArray($dir) {
  
        $result = array();
     
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value)
        {
           if (!in_array($value,array(".","..")))
           {
              if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
              {
                 $result[$value] = $this->dirToArray($dir . DIRECTORY_SEPARATOR . $value);
              }
              else
              {
                 $result[] = $value;
              }
           }
        }
       
        return $result;
     }

  
}
