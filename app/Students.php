<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Students extends Model
{
    use HasTranslations;

    protected $guarded=['id'];

    public $translatable = ['name','spec'];


    public function course(){
        return $this->belongsToMany('App\Courses');
    }

//    protected $casts = [
//        'name'=>'array',
//        'spec'=>'array',
//    ];

}
