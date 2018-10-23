<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use URL;
use Exception;

class HeaderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $header = Header::all();
        if($header = null){
            $header = $header;
        }
        else{
            $headers = Header::all();
            foreach($headers as $heading){
                $header = $heading;
            }
        }
        $guard = "admin";
        return view('admin/header')->with('guard', $guard)->with('header', $header);
    }

    public function headerPost(Request $request){

        $request->validate([
            'name' => 'required',
            'office_name' => 'required',  
            'location' => 'required',
            'city_id' => 'required',
        ]);

       //for product
       if($request->id != null)
            $header = Header::find($request->id);
        else $header = new Header();


       try{
           
           $header->id = $request->id;
           $header->city_id = $request->city_id;
           $header->name = $request->name;
           $header->office_name = $request->office_name;      
           $header->location = $request->location;     

           $header->save();
           if($header->id > 0)
               session()->flash("message",'Header saved successfully.');
           else
               session()->flash("message",'Header saving failed.');
       }catch(Exception $e){
           session()->flash('message','Failed to save Header.');
       }

       return redirect(URL::to('/').'/admin/header');
    }
}
