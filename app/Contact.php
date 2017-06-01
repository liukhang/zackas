<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='contacts';
	protected $fillabel = ['name','email','content'];
	public $timestamps = false;

	public function user(){
		return $this->belongsTo('App\User');
	}
}
