<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tuyen extends Model
{
    public $table = "tuyen";

    protected $fillable = [
       'id','noidi','noiden' ,'dongia'
    ];

    public $incrementing = false;
}
