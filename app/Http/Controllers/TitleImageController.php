<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TitleImage;
use URL;
use Exception;

class TitleImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function titleIndex()
    {
        $guard = "admin";
        return view('admin/notice-title')->with('guard', $guard);
    }

    public function titlePost(Request $request){
        
        //validate
        $request->validate([
            'title' => 'required',
            'city_id' => 'required|numeric|exists:cities,id',            
            'image' => 'required',            
        ]);

        $uploadPath = 'images/titleImages';

        $titleImage = new TitleImage();

        if($request->id != null){
            $titleImage = TitleImage::find($request->id);
        }

        // Handling uploaded image with previous image
        $fileName = $titleImage->image;
        if($request->hasFile('image'))
        {
            try{

                $file = $request->file('image');
                $fileName = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();
                $file->move($uploadPath,$fileName);

                if($request->id != null){
                    if(file_exists($uploadPath.'/'.$titleImage->image))
                        unlink($uploadPath.'/'.$titleImage->image);
                }
                
            }catch(Exception $e){
                session()->flash('message','Failed to upload Image.');
                return redirect(URL::previous());
            }
        }else if($request->id == null){
            session()->flash('message','Image is required');
            return redirect(URL::previous());
        }
        
        // Saving data
        try{
        
            $titleImage->title = $request->title;
            $titleImage->city_id = $request->city_id;            
            $titleImage->image = $fileName;
            $titleImage->position_number = '0';
            

            $titleImage->save();
            if($titleImage->id > 0)
                session()->flash("message",'Title saved successfully.');
            else
                session()->flash("message",'Title saving failed.');
        }catch(Exception $e){
            session()->flash('message','Failed to save Title.');
            return redirect(URL::previous());
        }

        return redirect(URL::to('/').'/admin/notice-title/');

    }

    public function api($id)
    {
        return TitleImage::find($id);
    }

    public function delete($id){
        
        $titleImage = TitleImage::find($id);
        if($titleImage){
            $titleImage->delete();
            session()->flash("message",'Title deleted successfully.');
        }
        else
        session()->flash("message",'Title delete failed.');

        return redirect(URL::to('/').'/admin/notice-title/');
    }

    // public function sortable($lv){
    //     // return $lv;
    //     $ids = $lv;
    //     $i = 1;
    //     foreach($ids as $id){
    //         $title = TitleImage::find($id);
    //         // $titleImage->title = $titleImage->title;
    //         // $titleImage->city_id = $titleImage->city_id;            
    //         // $titleImage->image = $titleImage->image;
    //         $title->position_number = $i;
    //         $title->save();
    //         $i++;
    //     }
    //     // $title = TitleImage::find($lv);
    //     return $lv;


    // }
}
