<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductImage;
use App\Danhgia;
use App\Http\Requests\ProductRequest;
use Input,File;
use Request;
use DB,Auth;
class ProductController extends Controller {
	
	public function getAdd(){
		$cate = Category::select('id','name','prarent_id')->get()->toArray();
		return view('backend.product.add',compact('cate'));
	}
	public function postAdd(ProductRequest $request_product){
		$product = new Product;
		$file_name = $request_product->file('fileimages')->getClientOriginalName();
		$product->name = $request_product->txtten;
		$product->alias = str_slug($request_product->txtten);
		$product->price = $request_product->txtgia;
		if($request_product->txtgiasale > 0){
		$product->pricesale = $request_product->txtgia - ($request_product->txtgia*$request_product->txtgiasale)/100;
		}else{
		$product->pricesale = $request_product->txtgiasale;
		}
		$product->qty = $request_product->txtqty;
		$product->intro = $request_product->txtndhienthi;
		$product->content = $request_product->txtndchitiet;
		$product->image = $file_name;
		$product->keywork = $request_product->txtkeyword;
		$product->discription = $request_product->txtmota;
		$product->user_id = Auth::user()->id;
		$product->cate_id = $request_product->parentid;
		$request_product->file('fileimages')->move('public/upload/',$file_name);
		$product->save();
		$product_id = $product->id;
		if(Input::hasFile('fileimageschitiet')){
			foreach (Input::file('fileimageschitiet') as $file) {
				$product_img = new ProductImage();
				if(isset($file)){
					$product_img->image = $file->getClientOriginalName();
					$product_img->product_id = $product_id;
					$file->move('public/upload/images_detail/',$file->getClientOriginalName());
					$product_img->save();
				}
			}
		}
		return redirect()->route('admin.product.getList')->with(['flash_level' => 'success','flash_message' =>'Thêm sản phẩm thành công']);
	}
	public function getList(){
		$arrProduct = Product::select('id','name','qty','price','pricesale','image','user_id','cate_id','created_at','updated_at')->orderBy('id','DESC')->paginate(8);
		return view('backend.product.list',compact('arrProduct'));
		
	}

	public function getDelete($id){
		$product_detail = Product::find($id)->pimages()->get()->toArray();
		foreach ($product_detail as $value) {
			File::delete('public/upload/images_detail/'.$value["image"]);
		}
		$product = Product::find($id);
		File::delete('public/upload/'.$product->image);
		$product->delete($id);
		return redirect()->route('admin.product.getList')->with(['flash_level' => 'success','flash_message' =>'Xóa sản phẩm thành công']);
	}


	public function getEdit($id){
		$category = Category::select('id','name','prarent_id')->get()->toArray();
		$product = Product::findOrFail($id);
		$product_img = Product::findOrFail($id)->pimages()->get()->toArray();
		return view('backend.product.edit',compact('category','product','product_img'));
	}
	public function postEdit($id,Request $request){
		$product = Product::find($id);
		$img_current = 'public/upload/'.Request::input('img_current');
		$product->name = Request::input('txtten');
		$product->alias = str_slug(Request::input('txtten'));
		$product->price = Request::input('txtgia');
		if(Request::input('txtgiasale') > 0){
		$product->pricesale = Request::input('txtgia')-(Request::input('txtgia')*Request::input('txtgiasale'))/100;
		}else{
		$product->pricesale = Request::input('txtgiasale');
		}
		$product->qty = Request::input('txtqty');
		$product->intro = Request::input('txtndhienthi');
		$product->content = Request::input('txtndchitiet');
		$product->keywork = Request::input('txtkeyword');
		$product->discription = Request::input('txtmota');
		$product->user_id = Auth::user()->id;
		$product->cate_id = Request::input('parentid');
		if(!empty(Request::file('fileimages'))){
			$file_name = Request::file('fileimages')->getClientOriginalName();
			$product->image = $file_name;
			Request::file('fileimages')->move('public/upload/',$file_name);
			if(File::exists($img_current)){
				File::delete($img_current);
			}
		}
		$product->save();
		if(!empty(Request::file('fileimageschitiet'))){
			foreach (Request::file('fileimageschitiet') as $file) {
				$product_img = new ProductImage();
				if(isset($file)){
					$product_img->image = $file->getClientOriginalName();
					$product_img->product_id = $id;
					$file->move('public/upload/images_detail/',$file->getClientOriginalName());
					$product_img->save();
				}
			}
		}
		return redirect()->route('admin.product.getList')->with(['flash_level' => 'success','flash_message' =>'Sữa sản phẩm thành công']);
	}
	public function getDelImg(){
		if(Request::ajax()){
			$idHinh = (int)Request::get('idHinh');
			$image_dateil = ProductImage::find($idHinh);
			if(!empty($image_dateil)){
				$img = 'public/upload/images_detail/'.$image_dateil->image;
				if(File::exists($img)){
					File::delete($img);
				}
				$image_dateil->delete($idHinh);
			}
			return "Oke";
		}
	}
	public function getDanhgia(){
		$danhgia = DB::table('danhgias')
            ->join('products', 'danhgias.product_id', '=', 'products.id')
            ->select('danhgias.*','products.*')
            ->groupBy('products.id','danhgias.product_id')
            ->paginate(8);
		return view('backend.product.danhgia',compact('danhgia'));
	}
	public function listupdate(){
		$update = DB::table('chitiethoadons')
            ->join('products',  'products.id', '=','chitiethoadons.id_sanpham')
            ->join('hoadons', 'chitiethoadons.id_hoadon', '=', 'hoadons.id')
            ->select('chitiethoadons.*', 'products.*', 'hoadons.status')
            ->where('hoadons.status',1)
			->where('qty','>',0)
			->where('soluong','>',0)
            ->paginate(8);
		
		return view('backend.update.listupdate',compact('update'));
	}
	public function getUpdate($id,$qty,$soluong,Request $request){
		$product = Product::find($id);
		$product->qty = $qty - $soluong;
		$product->save();
		$cthd = DB::table('chitiethoadons')->where('id_sanpham',$id)->update(['soluong' => 0]);
		return redirect()->route('admin.update.listupdate')->with(['flash_level' => 'success','flash_message' =>'Cập nhật số lượng sản phẩm thành công']);
	}
}
