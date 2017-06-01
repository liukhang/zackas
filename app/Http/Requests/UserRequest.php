<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
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
			'txtusername' 	=>'required|unique:users,username',
			'txtpassword' 	=> 'required',
			'txtemail' 		=> 'required',
			'txtfirstname' 	=> 'required',
			'txtphone' 		=> 'required',
			'txtaddress'	=> 'required',
			'txtlevel' 		=>'required'
		];
	}
	public function messages(){
		return [
			'txtusername.required' => 'Vui lòng nhập tên ',
			'txtusername.unique' => 'Tên đã tồn tại',
			'txtpassword.required' => 'Vui lòng nhập password',
			'txtemail.required' => 'Vui lòng nhập email',
			'txtfirstname.required' => 'Vui lòng nhập tên',
			'txtphone.required' =>'Vui lòng nhập sđt',
			'txtaddress.required' => 'Vui lòng nhập địa chỉ',
			'txtlevel.required' => 'Vui lòng nhập level',
		
		];
	}
}
