<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Blog extends Model
{
    use HasTranslations;

    protected $guarded=['id'];
    public $translatable = ['name','desc'];


}
