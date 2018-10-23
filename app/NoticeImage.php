<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeImage extends Model
{
    public $timestamps = false;

    public function titleImage(){
        return $this->belongsTo('App\TitleImage');
    }

    public function delete(){
        
        if(file_exists('images/noticeImages/'.$this->image))
            unlink('images/noticeImages/'.$this->image);

        parent::delete();
    
    }
}
