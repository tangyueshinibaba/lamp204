<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'uname' => 'required|min:6|max:12',
            'pass' => 'required|min:6|max:12|confirmed',
            'pass_confirmation' => 'required|min:6|max:12',
            'phone' => 'required|unique:hostusers|regex:/^[1][3,4,5,7,8][0-9]{9}$/'

        ];
    }
    public function messages()
    {
        return [
            'uname.required' => '用户名不能为空',
            'uname.min' => '用户名必须是6-12位',
            'pass.required' => '密码不能为空',
            'pass.min' => '密码必须是6-12位',
            'phone.required' => '手机号不能为空',
            'phone.regex' => '请输入常见手机号',
            'phone.unique' => '手机号已被注册',
            'pass.confirmed' => '两次密码输入不相同'
        ];
    }
}
