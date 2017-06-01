<?php



namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
	use SearchableTrait;
	    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'products.name' => 10,
            'products.id' => 10,
        ],
    ];

    protected $table ='products';
	protected $fillabel = ['id','name','alias','price','qty','intro','content','image','keywork','discription','user_id','cate_id'];
	public $timestamp = false;
	
	public function cate(){
		return $this->belongsTo('App\Category');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function pimages(){
		return $this->hasMany('App\ProductImage');
	}

	public function danhgia(){
		return $this->hasMany('App\Danhgia');
	}
	public function chitiethoadon(){
		return $this->hasMany('App\chitiethoadon');
	}
}
