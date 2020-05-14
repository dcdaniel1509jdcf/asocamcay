<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable=['name','image','ingredients','description','notes'];
    public $timestamps=false;
}
