<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = ['page_id', 'type'];

    public function metas()
    {
        return $this->hasMany('App\Meta');
    }
}
