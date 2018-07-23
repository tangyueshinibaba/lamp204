 <?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RepassRequest extends Request
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
             'oldpass' => 'required|min:6|max:12',
             'newpass' => 'required|min:6|max:12|confirmed',
             'newpass_confirmation' => 'required|min:6|max:12',
             'phone' => 'required|regex:/^[1][3,4,5,7,8][0-9]{9}$/'
        ];

    }

    public function messages()
    {
        return [
        
            'oldpass.required' => '原密码不能为空',
            'oldpass.min' => '密码必须是6-12位',
            'oldpass.max' => '密码必须是6-12位',
            'newpass.required' => '新密码不能为空',
            'newpass.min' => '密码必须是6-12位',
            'newpass.max' => '密码必须是6-12位',
            'newpass.confirmed' => '两次密码输入不相同'，
            'phone.regex' => '请输入有效手机号'

        ];
    }
}
