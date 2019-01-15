<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

class LoginController extends Controller
{
    public function getLogin() {
    	return view('frontend.login');
    }

    public function postLogin(Request $request) {
    
    	$rules = [
            'name'=>'required|min:6|max:255',
            'password'=>'required|min:6|max:255'
        ];
        $messages = [
            'name.required' => 'Tài khoản không được để trống',
            'name.min' => 'Tài khoản phải lớn hơn 5 ký tự',
            'name.max' => 'Tài khoản phải nhỏ hơn 255 ký tự',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải lớn hơn 5 ký tự',
            'password.max' => 'Mật khẩu phải nhở hơn 255 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

	    if ($validator->passes()) {
	        $arr = [
	    		'name'=>$request->name, 
		    	'password'=>$request->password, 
		    	'level'=>2,
		    ];
		    $arr2 = [
	    		'name'=>$request->name, 
		    	'password'=>$request->password, 
		    	'level'=>3,
		    ];
		    if($request->remember == 'nho') {
		    	$remember = true;
		    } else {
		    	$remember = false;
		    }
		    if(Auth::attempt($arr, $remember)) {
		    	return redirect()->intended('student');
		    }
		    if(Auth::attempt($arr2, $remember)) {
		    	return redirect()->intended('teacher');
		    }
		    else {
		    	return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu không hợp lệ!!!!');
		    }
	    } else {
	    	$errors=$validator->errors()->all();
	    	// dd($errors);
	    	return view('frontend.login')->withErrors($validator);
	    }
    }

    public function getLogout() {
    	Auth::logout();
		return redirect()->intended('/user/login');
    }
}
