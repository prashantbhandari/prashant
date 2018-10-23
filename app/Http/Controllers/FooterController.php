<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use URL;
use Exception;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $footer = Footer::all();
        if($footer = null){
            $footer = $footer;
        }
        else{
            $footers = Footer::all();
            foreach($footers as $foot){
                $footer = $foot;
            }
        }
        $guard = "admin";
        return view('admin/footer')->with('guard', $guard)->with('footer', $footer);
    }

    public function footerPost(Request $request){

        $request->validate([
            'phone' => 'required',
            'fax' => 'required',  
            'email' => 'required',
            'website' => 'required',  
            'facebook' => 'required',
            'city_id' => 'required',
        ]);

       //for product
       if($request->id != null)
            $footer = Footer::find($request->id);
        else $footer = new Footer();


       try{
           
           $footer->id = $request->id;
           $footer->city_id = $request->city_id;
           $footer->phone = $request->phone;
           $footer->fax = $request->fax;      
           $footer->email = $request->email;
           $footer->website = $request->website;      
           $footer->facebook = $request->facebook;      

           $footer->save();
           if($footer->id > 0)
               session()->flash("message",'Footer saved successfully.');
           else
               session()->flash("message",'Footer saving failed.');
       }catch(Exception $e){
           session()->flash('message','Failed to save Footer.');
       }

       return redirect(URL::to('/').'/admin/footer');
    }
}
