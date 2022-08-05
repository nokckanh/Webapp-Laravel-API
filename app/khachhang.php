<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    public $table = "khachhang";
    protected $fillable = [
        'name','phone' ,'CMND', 'noidi','noidon','trangthai','giatien'
    ];
}
