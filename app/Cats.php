<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Cats extends Model
{
    use HasTranslations;

    protected $guarded=['id'];

    public $translatable = ['name'];


    public function courses(){
        return $this->hasMany('App\Courses');
    }
}
