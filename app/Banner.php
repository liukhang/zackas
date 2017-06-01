<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table ='banners';
	protected $fillabel = ['name','img'];
	public $timestamp = false;
    
    public function user(){
    return $this->belongsTo('App\User');
	}
}
