<?php

namespace App\Http\Controllers;

use App\Career;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Illuminate\Support\Str;
use App\Mail\ApplicationMail;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $jobs = Career::where("status", '=', 'active')->latest()->get();
        return view('careers.index', compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request)
    {

        $job = Career::where("slug",$request->slug)->where("status", '=', 'active')->first();
        

        if ($job) {
            return view('careers.detail', compact('job'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }

        
    public function careersForm(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $validationRules = array(

            'name' => ['required',],
            'email' => ['required', 'email'],
            'phone' => ['required', 'max:50'],
            'expected_salary' => ['required'],
            'hear_about_us' => ['required'],
            'g-recaptcha-response' => ['required','captcha'],

        );  


        $validatedData = $request->validate(
            $validationRules
        );

            $application = new Application();
            $application->name = $request->name;
            $application->email = $request->email;
            $application->phone = $request->phone;        
            $application->current_salary = $request->current_salary;        
            $application->expected_salary = $request->expected_salary;        
            $application->cover = $request->cover;
            $application->resume = $request->resume;

            if ($file = $request->file('resume')) {
                $extension = $file->extension() ?: 'png';
                $destinationPath = public_path() . '/storage/application/';
                $safeName = $this->clean($application->name) .'-'.rand(0, 99999) . '.' . $extension;
                $file->move($destinationPath, $safeName);
                $application->resume = env('APP_URL').'storage/application/' . $safeName;                
            }   

            $application->hear_about_us = $request->hear_about_us;
            $application->linkedin = $request->linkedin;
            $application->current_company = $request->current_company;
            $application->job_title = $request->job_title;
            $application->save();

           
            // $to = 'hamza@cynosuredesigns.co.uk';
            // $bcc = explode(',', $admin_emails);        
            // Mail::to($to)->bcc($bcc)->send(new ApplicationMail($application));
            // Mail::to($to)->send(new ApplicationMail($application));

            $to = $application->email;
            $admin_emails = 'career@cynosuredesigns.co.uk';
            $bcc = explode(',', $admin_emails);
            Mail::to($to)->bcc($bcc)->send(new ApplicationMail($application));
            
            return Redirect::route('thank-you');

    }
}
