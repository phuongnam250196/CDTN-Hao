<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use DB;
use App\Http\Requests\test;
class LoginController extends Controller
{
    public function getLogin() {
    	return view('backend.login');
    }
    public function postLogin(test $request) {
    	$validator = Validator::make($request->all(), [
    		'email'=>'required|min:6|max:255',
            'password'=>'required|min:6|max:255'
    	]);

	    if ($validator->passes()) {
	        $arr = [
	    		'email'=>$request->email, 
		    	'password'=>$request->password, 
		    	'level'=>1,
		    ];
		    if($request->nho == 'nho') {
		    	$remember = true;
		    } else {
		    	$remember = false;
		    }
		    if(Auth::attempt($arr, $remember)) {
		    	return redirect()->intended('admin/home');
		    } else {
		    	return back()->with('error', 'Tài khoản hoặc mật khẩu không hợp lệ!!!!');
		    }
	    } else {
	    	return view('backend.login', ['errors'=>$validator->errors()->all()]);
	    }
    }
}
