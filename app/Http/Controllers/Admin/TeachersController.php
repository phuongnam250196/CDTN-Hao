<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\User;
use Validator;

class TeachersController extends Controller
{
    public function getIndex() {
    	$data = Teacher::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.teachers.index', compact('data'));
    }

    public function getCreate() {
    	return view('backend.teachers.create');
    }
    public function postCreate(Request $request) {
    	$rules = [
            'teacher_name' => 'required',
            'teacher_email' => 'required | email | unique',
            'teacher_phone' => 'required',
            'teacher_avatar' => 'mimes:jpg,png,jpeg',
        ];
        $messages = [
            'teacher_name.required' => 'Họ tên không được để trống',
            'teacher_email.required' => 'Email không được để trống',
            'teacher_email.email' => 'Email không đúng định dạng',
            'teacher_email.unique' => 'Email đã tồn tại',
            'teacher_phone.required' => 'Số điện thoại không được để trống',
            'teacher_avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Teacher;
            $data->teacher_name = $request->teacher_name;
            $data->teacher_phone = $request->teacher_phone;
            $data->teacher_email = $request->teacher_email;
            
            if($data->save()) {
                $user = User::where('email', $request->teacher_email);
                if(!empty($user)) {
                    return back()->with('messages', 'Email đã tồn tại!');
                } else {
                    $user = new User;
                    $user->name = $request->teacher_email;
                    $user->email = $request->teacher_email;
                    $user->teacher_id = $data->id;
                    $user->password = bcrypt($request->password);
                    $user->level = 3;
                    $user->save();
                    if(!empty($request->teacher_avatar) && $request->teacher_avatar != "undefined"){
                        $file =  $request->teacher_avatar;
                        $path = 'uploads/teachers/'.$data->id.'/';
                        $modifiedFileName = time().'-'.$file->getClientOriginalName();
                        if($file->move($path,$modifiedFileName)){
                            $data->teacher_avatar = $path.$modifiedFileName;
                            $data->save();
                        }
                    }
                    return redirect()->intended('admin/teachers')->with('messages', 'Thêm mới thành công!');
                }
            }
            
        }
    }

    public function getEdit($id) {
    	$data = Teacher::find($id);
    	return view('backend.teachers.edit', compact('data'));
    }
    public function postEdit(Request $request, $id) {
    	$rules = [
            'teacher_name' => 'required',
            'teacher_email' => 'required',
            'teacher_phone' => 'required',
            'teacher_avatar' => 'mimes:jpg,png,jpeg',
        ];
        $messages = [
            'teacher_name.required' => 'Họ tên không được để trống',
            'teacher_email.required' => 'Email không được để trống',
            'teacher_phone.required' => 'Số điện thoại không được để trống',
            'teacher_avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Teacher::find($id);
            $data->teacher_name = $request->teacher_name;
            $data->teacher_phone = $request->teacher_phone;
            $data->teacher_email = $request->teacher_email;
            if(!empty($request->teacher_avatar) && $request->teacher_avatar != "undefined"){
                $file =  $request->teacher_avatar;
                $path = 'uploads/teachers/'.$data->id.'/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->teacher_avatar = $path.$modifiedFileName;
                }
            }
            $data->save();
            return redirect()->intended('admin/teachers')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function getDelete($id) {
    	Teacher::destroy($id);
        $user = User::where('teacher_id', $id)->first();
        $user->delete();
        return back()->with("messages", "Đề tài được xóa thành công!");
    }
}
