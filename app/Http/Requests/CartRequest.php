<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CartRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtEmail' =>'required|regex:/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/',
			'txtName' => 'required|min:2|max:20',
			'txtPhone' => 'required|max:11|regex:/(0)[0-9]{9}/',
			'txtAddress' =>'required|min:5|max:30',
			'txtcity' =>'required'
		];
	}
	public function messages(){
		return [
			'txtEmail.required' => 'Vui lòng nhập Email',
			'txtEmail.regex' => 'Email không đúng định dạng',
			'txtName.required' => 'Vui lòng nhập tên của bạn',
			'txtName.min' => 'Tên nhập không đúng',
			'txtName.max' => 'Tên nhập quá dài dòng',
			'txtPhone.required' => 'Vui lòng nhập số điện thoại của bạn',
			'txtAddress.required' =>'Vui lòng nhập địa chỉ của bạn',
			'txtAddress.min' =>'Địa chỉ quá ngắn gọn',
			'txtAddress.max' =>'Địa chỉ quá dài dòng',
			'txtcity.required' =>'Vui lòng nhập thành phố của bạn'
			];
	}
}
