<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TitleImage;
use App\NoticeImage;
use URL;
use Exception;

class NoticeImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function noticeIndex($id)
    {
        $title = TitleImage::find($id);
        $guard = "admin";
        return view('admin/notice-image')->with('guard', $guard)->with('title', $title);
    }

    public function noticePost(Request $request, $id){
        
        //validate
        $request->validate([
            'title_image_id' => 'required|numeric|exists:title_images,id',            
            'image' => 'required',            
        ]);

        $uploadPath = 'images/noticeImages';

        $noticeImage = new NoticeImage();

        if($request->id != null){
            $noticeImage = NoticeImage::find($request->id);
        }

        // Handling uploaded image with previous image
        $fileName = $noticeImage->image;
        if($request->hasFile('image'))
        {
            try{

                $file = $request->file('image');
                $fileName = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();
                $file->move($uploadPath,$fileName);

                if($request->id != null){
                    if(file_exists($uploadPath.'/'.$noticeImage->image))
                        unlink($uploadPath.'/'.$noticeImage->image);
                }
                
            }catch(Exception $e){
                session()->flash('message','Failed to upload image.');
                return redirect(URL::previous());
            }
        }else if($request->id == null){
            session()->flash('message','Image is required');
            return redirect(URL::previous());
        }
        
        // Saving data
        try{
        
            $noticeImage->title_image_id = $request->title_image_id;            
            $noticeImage->image = $fileName;
            

            $noticeImage->save();
            if($noticeImage->id > 0)
                session()->flash("message",'Notice saved successfully.');
            else
                session()->flash("message",'Notice saving failed.');
        }catch(Exception $e){
            session()->flash('message','Failed to save Title.');
            return redirect(URL::previous());
        }

        return redirect(URL::to('/').'/admin/notice-image/'.$id);

    }

    public function api($id)
    {
        return NoticeImage::find($id);
    }

    public function delete($id){
        
        $noticeImage = NoticeImage::find($id);
        if($noticeImage){
            $noticeImage->delete();
            session()->flash("message",'Notice deleted successfully.');
        }
        else
        session()->flash("message",'Notice delete failed.');

        return redirect(URL::to('/').'/admin/notice-image/'.$noticeImage->titleImage->id);

    }
}
