<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Trainers extends Model
{
    use HasTranslations;

    protected $guarded=['id'];
    public $translatable = ['name','spec','desc'];


    public function courses(){
        return $this->hasMany('App\Courses');
    }

//    protected $casts = [
//        'name'=>'array',
//        'phone'=>'array',
//        'spec'=>'array',
//        'desc'=>'array',
//    ];

}
