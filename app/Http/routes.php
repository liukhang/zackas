<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', ['as' =>'trangchu','uses' => 'PageController@index']);
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('admin',['as' => 'admin','middleware'=>'auth','uses' => 'TrangchuContronller@index']);
Route::group(['middleware'=>'auth','prefix' =>'admin'],function(){
	Route::group(['prefix' => 'category'],function(){
		Route::get('add',['as' => 'admin.category.getAdd','uses' => 'CategoryController@getAdd']);
		Route::post('add',['as' => 'admin.category.postAdd','uses' => 'CategoryController@postAdd']);
		Route::get('list',['as' => 'admin.category.getList','uses' => 'CategoryController@getList']);
		Route::get('delete/{id}',['as' => 'admin.category.getDelete','uses' => 'CategoryController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.category.getEdit ','uses' => 'CategoryController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.category.postEdit','uses' => 'CategoryController@postEdit']);
	});
	Route::group(['prefix' => 'product'],function(){
		Route::get('add',['as' => 'admin.product.getAdd','uses' => 'ProductController@getAdd']);
		Route::post('add',['as' => 'admin.product.postAdd','uses' => 'ProductController@postAdd']);
		Route::get('list',['as' => 'admin.product.getList','uses' => 'ProductController@getList']);
		Route::get('delete/{id}',['as' => 'admin.product.getDelete','uses' => 'ProductController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.product.getEdit','uses' => 'ProductController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.product.postEdit','uses' => 'ProductController@postEdit']);
		Route::get('delimg/{id}',['as' => 'admin.product.getDelImg','uses' => 'ProductController@getDelImg']);
		Route::get('listdanhgia',['as' => 'admin.product.listDanhgia','uses' => 'ProductController@getDanhgia']);
	});
	Route::group(['prefix' => 'tintuc'],function(){
		Route::get('add',['as' => 'admin.tintuc.getAdd','uses' => 'TintucController@getAdd']);
		Route::post('add',['as' => 'admin.tintuc.postAdd','uses' => 'TintucController@postAdd']);
		Route::get('list',['as' =>'admin.tintuc.getList','uses' => 'TintucController@getList']);
		Route::get('delete/{id}',['as' =>'admin.tintuc.getDelete','uses' => 'TintucController@delete']);
		Route::get('edit/{id}',['as' =>'admin.tintuc.getEdit','uses' => 'TintucController@getEdit']);
		Route::post('edit/{id}',['as' =>'admin.tintuc.getEdit','uses' => 'TintucController@postEdit']);
	});
	Route::group(['prefix' => 'cart'],function(){
		Route::get('list',['as' => 'admin.cart.getCart','uses' => 'CartController@listcart']);
		Route::get('delete/{id}',['as' => 'admin.cart.getDelete','uses' => 'CartController@delete']);
		Route::get('update/{id}',['as' => 'admin.cart.getCapnhat','uses' => 'CartController@update']);
	});
	Route::group(['prefix' => 'contact'],function(){
		Route::get('list',['as' => 'admin.contact.getContact','uses' => 'TintucController@listcontact']);
		Route::get('delete/{id}',['as' => 'admin.cart.getContact','uses' => 'TintucController@deletecontact']);
	});
	Route::group(['prefix' => 'user'],function(){
		Route::get('add',['as' => 'admin.user.getAdd','uses' => 'UserController@getAdd']);
		Route::post('add',['as' => 'admin.user.postAdd','uses' => 'UserController@postAdd']);
		Route::get('list',['as' => 'admin.user.getList','uses' => 'UserController@getList']);
		Route::get('delete/{id}',['as' => 'admin.user.getDelete','uses' => 'UserController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.user.getEdit','uses' => 'UserController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.user.postEdit','uses' => 'UserController@postEdit']);
		Route::get('delimg/{id}',['as' => 'admin.user.getDelImg','uses' => 'UserController@getDelImg']);
	});
	Route::group(['prefix' => 'banner'],function(){
		Route::get('addbanner',['as' => 'admin.banner.getAddbanner','uses' => 'TintucController@getAddbanner']);
		Route::post('addbanner',['as' => 'admin.banner.postAddbanner','uses' => 'TintucController@postAddbanner']);
		Route::get('listbanner',['as' =>'admin.banner.bannerList','uses' => 'TintucController@bannerList']);
		Route::get('deletebanner/{id}',['as' =>'admin.banner.bannerDelete','uses' => 'TintucController@bannerDelete']);
	});
	Route::group(['prefix' => 'update'],function(){
		Route::get('listupdate',['as' => 'admin.update.listupdate','uses' => 'ProductController@listupdate']);
		Route::get('getUpdate/{id}/{qty}/{soluong}',['as' => 'admin.update.getUpdate','uses' => 'ProductController@getUpdate']);
	});
});
Route::get('san-pham',['as' => 'sanpham','uses' => 'PageController@listshop']);
Route::get('dang-ky',['as' => 'dangky','uses' => 'PageController@getDangky']);
Route::post('dang-ky',['as' => 'dangky','uses' => 'PageController@postDangky']);
Route::get('gio-hang',['as' => 'giohang','uses' => 'PageController@giohang']);
Route::get('addtocart/{id}/{qty}',['as' => 'themvaogio','uses' => 'PageController@addtocart']);
Route::get('huy-gio-hang',['as' => 'huygiohang','uses' => 'PageController@huygiohang']);
Route::get('xoa-cart/{id}',['as' => 'xoacart','uses' => 'PageController@xoacart']);
Route::get('update-cart/{id}/{qty}',['as' => 'updatecart','uses' => 'PageController@updatecart']);
Route::get('thanh-toan',['as' => 'thanhtoan','uses' =>'PageController@thanhtoan']);
Route::post('thanh-toan',['as' => 'thanhtoan','uses' =>'PageController@postthanhtoan']);
Route::get('danh-gia',['as' => 'danhgia','uses' =>'PageController@danhgia']);
Route::get('lien-he',['as' => 'lienhe','uses' =>'PageController@lienhe']);
Route::post('lien-he',['as' => 'lienhe','uses' =>'PageController@postlienhe']);
Route::get('subscrice',['as' => 'subscrice','uses' =>'PageController@subscrice']);
Route::post('subscrice',['as' => 'subscrice','uses' =>'PageController@postsubscrice']);
Route::get('chitietsanpham/{id}/{alias}',['as' => 'chitietsanpham','uses' => 'PageController@chitietsanpham']);
Route::get('danh-muc/{id}/{alias}',['as' => 'cateparent','uses' => 'PageController@cateparent']);
// Route::any('{all?}','PageController@index')->where('all','(.*)');
Route::get('search',['as' => 'search','uses' => 'PageController@getTimKiem']);
Route::get('search',['as' => 'search','uses' => 'PageController@postTimKiem']);
Route::get('timkiem',['as' => 'search','uses' => 'PageController@getChonLoc']);
Route::get('timkiem/{alias}',['as' => 'search','uses' => 'PageController@postChonLoc']);
// Blog
Route::get('blog',['as' => 'blog','uses' => 'TintucController@listblog']);
Route::get('blog/{id}/{alias}',['as' => 'blogdetail','uses' => 'TintucController@blogdetail']);
//login logout register
Route::get('administrator/login',['as' => 'administrator.login','uses' => 'Auth\AuthController@getLogin']);
Route::post('administrator/login',['as' => 'administrator.login','uses' => 'Auth\AuthController@postLogin']);
Route::get('administrator/register',['as' => 'administrator.register','uses' => 'Auth\AuthController@getRegister']);
Route::post('administrator/register',['as' => 'administrator.register','uses' => 'Auth\AuthController@postRegister']);
Route::get('administrator/logout', function() {
    Auth::logout();
    Session::clear();
    return Redirect::to('administrator/login');
});
Route::post('/paypal','PayPalTestController@index');