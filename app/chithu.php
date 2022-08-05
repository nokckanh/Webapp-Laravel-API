<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chithu extends Model
{
    public $table = "chithu";
    protected $fillable = [
        'lichtrinh_id','chithu','name','ghichu'
    ];
}
