<?php

namespace App;
use App\xe;
use Illuminate\Database\Eloquent\Model;

class nhaxe extends Model
{
	public $table = "nhaxe";

	protected $fillable = [
        'name','address' ,'localtion', 
    ];

    public $incrementing = false;

    public function xe()
    {
    	return $this->hasMany(xe::class);
    }
}
