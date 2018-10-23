<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
        public $timestamps = false;

        public function users(){
                return $this->hasMany('App\User');
        }

        public function titleImages(){
                return $this->hasMany('App\TitleImage');
        }

        public function headers(){
                return $this->hasMany('App\Header');
        }

        public function footers(){
                return $this->hasMany('App\Footer');
        }

        public function delete(){
        
                foreach($this->users as $user)
                    $user->delete();
        
                foreach($this->titleImages as $titleImage)
                    $titleImage->delete();

                foreach($this->headers as $header)
                    $header->delete();

                foreach($this->footers as $footer)
                    $footer->delete();
        
                parent::delete();
        
            }
}
