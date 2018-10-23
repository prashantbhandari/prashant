<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TitleImage extends Model
{
    public $timestamps = false;

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function noticeImages(){
        return $this->hasMany('App\NoticeImage');
}


    public function delete(){
        
        if(file_exists('images/titleImages/'.$this->image)){
            unlink('images/titleImages/'.$this->image);
        }
        foreach($this->noticeImages as $noticeImage){
                    $noticeImage->delete();
        }
        parent::delete();
    
    }
}
