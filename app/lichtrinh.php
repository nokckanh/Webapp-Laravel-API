<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichtrinh extends Model
{
    public $table = "lichtrinh";


    protected $fillable = [
        'tuyen_id' ,'ngaydi','xuatben','xe_id'
    ];

   protected $primaryKey = 'id';

    // public $incrementing = false;

   public function tuyenxe()
   {
   	 return $this->hasOne(tuyen::class);
   }

    public function mtxe()
    {
        return $this->belongsToMany(xe::class);
    }

}
