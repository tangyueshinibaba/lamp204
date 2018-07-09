<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdverBlogPostRequest extends Request
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
            'advername'=>'required',
            'path' =>'required',
            'profile'=>'required',
            'weizhi'=>'required',
        ];
    }
   public function messages()
    {
    return [
        'advername.required' => '广告名字是必填的',
        'path.required'=>'路径是必填的',
        'profile.required'=>'头像是必选的',
        'weizhi.required'=>'位置是必选的',
        ];
    }
}
