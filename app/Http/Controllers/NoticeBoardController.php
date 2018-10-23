<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class NoticeBoardController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('welcome')->with('cities', $cities);
    }

    public function notice($city) 
    {
        $city = City::all()->where('name', $city)->first();
        if($city){
            return view('notice-board')->with('city', $city);
        }
        else{
            abort(404);
        }
    }
}
