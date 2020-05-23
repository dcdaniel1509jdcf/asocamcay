<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $fillable=['homecode','homedesc','homeimg1','homeimg2','homeimg3','homeimg4','homeimg5','homedir','hometelf','homeemail'];
    public $timestamps=true;
}
