<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Notifications\Notifiable;


class Career extends Model
{
    use HasTranslations;
    use Notifiable;


    protected $guarded=['id'];
    public $translatable = ['name','company','job_title','edu_level'];





}
