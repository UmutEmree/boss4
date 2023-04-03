<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use Translatable;
    protected $translatable = ['title','body'];

    public function images()
    {
        return $this->hasMany('App\Gallery');
    }

}
