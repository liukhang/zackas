<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use DB,Auth;
use App\User;
class UserController extends Controller {

	public function getAdd(){
		$data = User::select('*')->orderBy('id','DESC')->get()->toArray();
		return view('backend.user.add',compact('data'));
	}
	public function postAdd(UserRequest $request){
		$user = new User;
		$user->username = $request->txtusername;
		$user->password = bcrypt($request->txtpassword);
		$user->email = $request->txtemail;
		$user->firstname = $request->txtfirstname;
		$user->phone = $request->txtphone;
		$user->address = $request->txtaddress;
        $user->level = $request->txtlevel;
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level' => 'success','flash_message' => 'Thêm thành công !!']);;
	}
	public function getList(){
		$listUser = User::select('*')->orderBy('id','DESC')->paginate(10);
		//$listCate = Category::select("*")->orderBy('id','DESC')->get()->toArray();
		return view('backend.user.list',compact('listUser'));
	 }
	public function getDelete($id){
		$user = User::findOrFail($id);
		$user->delete();
		return redirect()->route('admin.user.getList')->with(['flash_level' => 'success','flash_message' =>'Xóa thành công']);
	}
	public function getEdit($id){
		$data = User::findOrFail($id)->toArray();
		return view('backend.user.edit',compact('data'));
	}
	public function postEdit(Request $request, $id){
		$this->validate($request,
			[
				"txtusername" => "required",
				"txtusername" => "required",
				"txtpassword" => "required|min:3|max:32",
				"repassword" => "required|same:txtpassword",
				'txtemail' => 'required'
			],
			[
				"txtusername.required" => "Tên danh mục không được bỏ trống",
				"txtpassword.required" => "Vui Lòng Nhập Mật Khẩu",
				"txtpassword.min" => "Mật Khẩu Có Độ Dài Ít Nhất 3 Ký Tự Và Dài Nhất 32 Ký Tự",
				"txtpassword.max" => "Mật Khẩu Có Độ Dài Ít Nhất 3 Ký Tự Và Dài Nhất 32 Ký Tự",
				"repassword.required" => "Vui Lòng Nhập Lại Mật Khẩu",
				"repassword.same" => "Mật Khẩu Nhập Lại Không Khớp",
				'txtemail.required' => 'Vui Lòng Nhập Email'
			]
		);
		$user = User::find($id);
		$user->username = $request->txtusername;
		$user->password = bcrypt($request->txtpassword);
		$user->email = $request->txtemail;
		$user->firstname = $request->txtfirstname;
		$user->phone = $request->txtphone;
		$user->address = $request->txtaddress;
        $user->level = $request->txtlevel;
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level' => 'success','flash_message' => 'Sữa thành công']);
	}
}
