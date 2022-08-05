<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hanghoa extends Model
{
    public $table = "hanghoa";
    protected $fillable = [
        'tennguoinhan','tennguoigui' ,'sdtnguoinhan', 'sdtnguoigui','loaihang','noiden','trangthai','Giacuoc','soluong'
    ];
}
