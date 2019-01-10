<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Validator;

class DashboardController extends Controller
{
    public function getHome() {
    	return view('backend.index');
    }
    public function getLogout() {
		Auth::logout();
		return redirect()->intended('login');
	}

	public function getProfile() {
		return view('backend.profile');
	}
	public function editProfile() {
		$data = User::find(Auth::id());
		return view('backend.profile_edit', compact('data'));
	}
	public function postEditProfile(Request $request) {
		$rules = [
            'avatar' => 'mimes:png,jpg,jpeg',
            'content' => 'required',
        ];
        $messages = [
            'avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
            'content.required' => 'Nội dung website không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = User::find(Auth::id());
            // dd($data);
            $data->content = $request->content;
            if(!empty($request->avatar) && $request->avatar != "undefined"){
                $file =  $request->avatar;
                $path = 'uploads/admin/'.$data->id.'/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->avatar = $path.$modifiedFileName;
                }
            }
            $data->save();
            return redirect()->intended('admin/profile')->with('messages', 'Cập nhật thành công!');
        }
	}
}
