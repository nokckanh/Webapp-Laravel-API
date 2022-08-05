<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTchuyendi extends Model
{
	public $table = "ctchuyendi";
    protected $fillable = [
        'lichtrinh_id','thoigiandung' ,'ghichu', 'create_at','update_at'
    ];
}
