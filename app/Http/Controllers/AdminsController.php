<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use URL;
use Exception;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $guard = "superadmin";
        return view('admin/admins')->with('guard', $guard);
    }

    public function delete($id){

        $check = User::find($id);
        if(isset($check) == true ){
            $admin = User::find($id);
            if($admin){
                $admin->delete();
                session()->flash("message",'Admin deleted successfully.');
            }
            else
                session()->flash("message",'Admin delete failed.');
                return redirect(URL::to('/').'/superadmin/admins');
        }
        else{
            return 'Admin not found.';
        }
    }
}
