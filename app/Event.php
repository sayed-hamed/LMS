<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Event extends Model
{
    use HasTranslations;

    protected $guarded=['id'];
    public $translatable = ['name','desc','small_desc','aim_course','course_type','level','lang'];

    public function cat(){
        return $this->belongsTo('App\Cats');
    }

    public function trainer(){
        return $this->belongsTo('App\Trainers');
    }


    public function student(){
        return $this->belongsToMany('App\Students');
    }
}
