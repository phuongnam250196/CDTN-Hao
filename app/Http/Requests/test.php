<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class test extends FormRequest
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
            'email'=>'required| email | min:6|max:255',
            'password'=>'required|min:6|max:255'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Tài khoản không được để trống',
            'email.email'=>'Không phải email',
            'email.min'=>'Tài khoản tối thiểu 6 ký tự',
            'email.max'=>'Tài khoản tối đa 255 ký tự',
            'password.required'=>'Mật khẩu không được để trống',
            'password.min'=>'Mật khẩu tối thiểu 6 ký tự',
            'password.max'=>'Mật khẩu tối thiểu 255 ký tự',
        ];
    }
}
