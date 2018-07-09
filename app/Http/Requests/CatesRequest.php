<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CatesRequest extends Request
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
            'cname'=>'required|unique:cates',
            'pid'=>'required',
        ];
    }

   public function messages()
    {
        return [
            'cname.required' => '分类名是必填的',
            'cname.unique'=>'该类名已经存在,请换一个',
            'pid.required'  => '路径是必填的',
        ];
    }
}
