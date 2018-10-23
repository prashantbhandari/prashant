<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use URL;
use Exception;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $guard = "superadmin";
        return view('admin/city')->with('guard', $guard);
    }

    public function post(Request $request){
        
        //validate
        $request->validate([
            'name' => 'required|unique:cities',
        ]);
        
        if($request->id != null)
            $city = City::find($request->id);
        else $city = new City();
        
        $city->name = strtolower($request->name);
        $city->save();
        if($city->id > 0)
            session()->flash("message",'City saved successfully.');
        else
            session()->flash("message",'City saving failed.');

        return redirect(URL::to('/').'/superadmin/city');

    }

    public function api($id)
    {
        return City::find($id);
    }

    public function delete($id){

        $check = City::find($id);
            if(isset($check) == true ){
            $city = City::find($id);
            if($city ){
                $city->delete();
                session()->flash("message",'City deleted successfully.');
            }
            else
            session()->flash("message",'City delete failed.');

            return redirect(URL::to('/').'/superadmin/city');
        }
        else{
            return 'City not found.';
        }
    }
}
