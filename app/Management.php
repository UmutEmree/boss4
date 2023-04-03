<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Management extends Model
{
    use Translatable;
    protected $translatable = ['title','text'];

   

}
