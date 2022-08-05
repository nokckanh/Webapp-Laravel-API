<?php

namespace App;
use App\lichtrinh;
use Illuminate\Database\Eloquent\Model;

class xe extends Model
{
	public $table = "xe";

    protected $fillable = [
        'nhaxe_id','seats' ,'BSX', 'phonecar',
    ];


    public function lichtrinhlichtrinh()
    {
        return $this->belongsToMany(lichtrinh::class,'xe_lichtrinh');
    }
}
