<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Carchange extends Model
{
    use HasTranslations;

    protected $guarded=['id'];

    public $translatable = ['teacher_type'];


}
