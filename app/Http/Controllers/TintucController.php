<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\User;
use App\Tintuc;
use App\Banner;
use App\Contact;
use Auth;
use Input,File;
use Request;
//use Carbon\Carbon;
use App\Http\Requests\TintucRequest;
use App\Http\Requests\BannerRequest;
class TintucController extends Controller {

	public function getAdd(){
		return view('backend.tintuc.add');
	}
	public function postAdd(TintucRequest $request){
		$tintuc = new Tintuc;
		$file_name = $request->file('fileimages')->getClientOriginalName();
		$tintuc->name = $request->txtten;
		$tintuc->alias = str_slug($request->txtten);
		$tintuc->intro = $request->txtndhienthi;
		$tintuc->content = $request->txtndchitiet;
		$tintuc->image = $file_name;
		$tintuc->keyword = $request->txtkeyword;
		$tintuc->description = $request->txtmota;
		$tintuc->user_id = Auth::user()->id;
		$request->file('fileimages')->move('public/upload/tintuc/',$file_name);
		$tintuc->save();
		return redirect()->route('admin.tintuc.getList')->with(['flash_level' => 'success','flash_message' =>'Thêm bài viết thành công']);
	}
	public function getList(){
		$tintuc = Tintuc::all();
		return view('backend.tintuc.list',compact('tintuc'));
	}
	public function delete($id){
		$tintuc = Tintuc::find($id);
		$tintuc = Tintuc::find($id);
		File::delete('public/upload/tintuc/'.$tintuc->image);
		$tintuc->delete();
		return redirect()->route('admin.tintuc.getList')->with(['flash_level' => 'success','flash_message' =>'Xóa bài viết thành công']);
	}
	public function getEdit($id){
		$tintuc = Tintuc::findOrFail($id);
		return view('backend.tintuc.edit',compact('tintuc'));
	}
	public function postEdit($id,Request $request){
		$tintuc = Tintuc::find($id);
		$img_current = 'public/upload/tintuc/'.Request::input('img_current');
		$tintuc->name = Request::input('txtten');
		$tintuc->alias = str_slug(Request::input('txtten'));
		$tintuc->intro = Request::input('txtndhienthi');
		$tintuc->content = Request::input('txtndchitiet');
		$tintuc->keyword = Request::input('txtkeyword');
		$tintuc->description = Request::input('txtmota');
		$tintuc->user_id = Auth::user()->id;
		if(!empty(Request::file('fileimages'))){
			$file_name = Request::file('fileimages')->getClientOriginalName();
			$tintuc->image = $file_name;
			Request::file('fileimages')->move('public/upload/tintuc/',$file_name);
			if(File::exists($img_current)){
				File::delete($img_current);
			}
		}
		$tintuc->save();
		return redirect()->route('admin.tintuc.getList')->with(['flash_level' => 'success','flash_message' =>'Sữa bài viết thành công']);
	}
	//quan li contact 
	public function listcontact(){
		$contact = Contact::orderBy('id','DESC')->paginate(8);
		return view('backend.contact.list',compact('contact'));
	}
	public function deletecontact($id){
		$contact = Contact::find($id);
		$contact->delete();
		return redirect()->route('admin.contact.getContact')->with(['flash_level' => 'success','flash_message' =>'Xóa thành công']);
	}
	// show news blog 
	public function listblog(){
		$blogi =  Tintuc::orderBy('id','DESC')->get();
		return view('frontend.pages.blog',compact('blogi'));
	}
	public function blogdetail($id){
		$blogdetail = Tintuc::where('id',$id)->first();
		return view('frontend.pages.blogdetail',compact('blogdetail'));
	}

	// quan li banner
	public function getAddbanner(){
		return view('backend.banner.add');
	}
	public function postAddbanner(BannerRequest $request){
		$banner = new Banner;
		$file_name = $request->file('fileimages')->getClientOriginalName();
		$banner->name = $request->txtname;
		$banner->image = $file_name;
		$request->file('fileimages')->move('public/upload/banner/',$file_name);
		$banner->save();
		return redirect()->route('admin.banner.bannerList')->with(['flash_level' => 'success','flash_message' =>'Thêm banner thành công']);
	}
	public function bannerList(){
		$banner = Banner::all();
		return view('backend.banner.list',compact('banner'));
	}
	public function bannerDelete($id){
		$banner = Banner::find($id);
		$banner = Banner::find($id);
		File::delete('public/upload/banner/'.$banner->image);
		$banner->delete();
		return redirect()->route('admin.banner.bannerList')->with(['flash_level' => 'success','flash_message' =>'Xóa bài banner thành công']);
	}
}