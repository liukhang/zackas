<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BannerRequest extends Request
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
            'txtname' => 'required|unique:banners,name',
			'fileimages' => 'required|image'
            //
        ];
    }
    public function messages(){
		return [
			'txtname.required' => 'Name không được bỏ trống',
			'txtname.unique' => 'Tên đã tồn tại',
			'fileimages.required' => 'Vui lòng chọn hình ảnh cho bài viết',
			'fileimages.image' => 'Hình ảnh không đúng định dạng'
		];
	}
}
