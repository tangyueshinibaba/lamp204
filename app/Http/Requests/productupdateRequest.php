<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class productupdateRequest extends Request
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
           'pname' => 'required',
           'huohao' => 'required',
        ];
    }

     public function messages()
    {
        return [
            'pname.required' =>'名字不能为空',
            'huohao.required' =>'货号不能为空',
        ];
    }
}
