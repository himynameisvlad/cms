<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function templates()
    {
        return $this->hasMany('App\Template');
    }
}
