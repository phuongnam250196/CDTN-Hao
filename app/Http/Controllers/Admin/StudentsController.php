<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Validator;
use App\User;

class StudentsController extends Controller
{
    public function getIndex() {
    	$data = Student::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.students.index', compact('data'));
    }

    public function getCreate() {
    	return view('backend.students.create');
    }
    public function postCreate(Request $request) {
    	$rules = [
            'student_name' => 'required',
            'student_code' => 'required',
            'student_phone' => 'required',
            'student_email' => 'required',
            'student_avatar' => 'mimes:jpg,png,jpeg',
        ];
        $messages = [
            'student_name.required' => 'Họ tên không được để trống',
            'student_code.required' => 'Mã sinh viên không được để trống',
            'student_phone.required' => 'Số điện thoại không được để trống',
            'student_email.required' => 'Email không được để trống',
            'student_avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Student;
            $data->student_name = $request->student_name;
            $data->student_code = $request->student_code;
            $data->student_phone = $request->student_phone;
            $data->student_email = $request->student_email;

            if($data->save()) {
                $user = new User;
                $user->name = $request->student_code;
                $user->email = $request->student_email;
                $user->student_id = $data->id;
                $user->password = bcrypt($request->password);
                $user->level = 2;
                $user->save();
                if(!empty($request->student_avatar) && $request->student_avatar != "undefined"){
                    $file =  $request->student_avatar;
                    $path = 'uploads/students/'.$data->id.'/';
                    $modifiedFileName = time().'-'.$file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->student_avatar = $path.$modifiedFileName;
                        $data->save();
                    }
                }
            }
            return redirect()->intended('admin/students')->with('messages', 'Thêm mới thành công!');
        }
    }

    public function getEdit($id) {
    	$data = Student::find($id);
    	return view('backend.students.edit', compact('data'));
    }
    public function postEdit(Request $request, $id) {
    	$rules = [
            'student_name' => 'required',
            'student_code' => 'required',
            'student_phone' => 'required',
            'student_avatar' => 'mimes:jpg,png,jpeg',
        ];
        $messages = [
            'student_name.required' => 'Họ tên không được để trống',
            'student_code.required' => 'Mã sinh viên không được để trống',
            'student_phone.required' => 'Số điện thoại không được để trống',
            'student_avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Student::find($id);
            $data->student_name = $request->student_name;
            $data->student_code = $request->student_code;
            $data->student_phone = $request->student_phone;
            $data->student_email = $request->student_email;
            if(!empty($request->student_avatar) && $request->student_avatar != "undefined"){
                $file =  $request->student_avatar;
                $path = 'uploads/students/'.$data->id.'/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->student_avatar = $path.$modifiedFileName;
                }
            }
            $data->save();
            return redirect()->intended('admin/students')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function getDelete($id) {
    	Student::destroy($id);
        return back()->with("messages", "Đề tài được xóa thành công!");
    }
}
