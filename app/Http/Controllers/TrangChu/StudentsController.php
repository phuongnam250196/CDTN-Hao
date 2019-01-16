<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Auth;
use App\User;
use App\Posts;
use App\Device;
use App\Calendar;
use App\User_Device;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class StudentsController extends Controller
{
    public function getIndex() {
    	return view('frontend.student.index');
    }

    public function getInfo() {
    	$data = User::find(Auth::id())->Student;
    	return view('frontend.student.info', compact('data'));
    }

    public function getUpdateInfo() {
    	$data = User::find(Auth::id())->Student;

    	// dd($data);
    	return view('frontend.student.info_update', compact('data'));
    }
    public function postUpdateInfo(Request $request) {
    	$rules = [
            'student_name' => 'required',
            'student_phone' => 'required',
            'student_email' => 'required',
            'student_avatar' => 'mimes:jpg,png,jpeg',
        ];
        $messages = [
            'student_name.required' => 'Họ tên không được để trống',
            'student_phone.required' => 'Số điện thoại không được để trống',
            'student_email.required' => 'Email không được để trống',
            'student_avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Student::find(Auth::user()->student_id);
            $data->student_name = $request->student_name;
            $data->student_phone = $request->student_phone;
            $data->student_email = $request->student_email;
            $to_name = 'a';
			$to_email = 'phuongnam250196@gmail.com';
			$data = array('name'=>"Sam Jose", "body" => "Test mail");
			    
			$name = 'Krunal';
   				Mail::to('phuongnam250196@gmail.com')->send(new OrderShipped($name));
	    	dd($a);

            // if($data->save()) {
            //     if(!empty($request->student_avatar) && $request->student_avatar != "undefined"){
            //         $file =  $request->student_avatar;
            //         $path = 'uploads/students/'.$data->id.'/';
            //         $modifiedFileName = time().'-'.$file->getClientOriginalName();
            //         if($file->move($path,$modifiedFileName)){
            //             $data->student_avatar = $path.$modifiedFileName;
            //             $data->save();
            //         }
            //     }
            // }
            // return redirect()->intended('/student/info')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function getChange() {
        return view('frontend.student.change_password');
    }

    public function listPosts() {
    	$data = Posts::where('student_id', Auth::user()->student_id)->orderBy('created_at', 'desc')->paginate(5);
    	return view('frontend.student.posts', compact('data'));
    }

    public function getCreatePosts() {
    	return view('frontend.student.posts_create');
    }
    public function postCreatePosts(Request $request) {
    	$rules = [
            'post_title' => 'required',
            'post_img' => 'required | mimes:png,jpg,jpeg',
            'post_content' => 'required',
        ];
        $messages = [
            'post_title.required' => 'Tiêu đề bài viết không được để trống',
            'post_img.required' => 'Ảnh minh họa không được để trống',
            'post_img.mimes' => 'Ảnh minh họa không đúng định dạng',
            'post_content.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Posts;
            $data->post_title = $request->post_title;
            $data->post_slug = str_slug($request->post_title);
            $data->post_content = $request->post_content;
            $data->student_id = Auth::user()->student_id;
            $data->post_status = 0;
            if($data->save()) {
                if(!empty($request->post_img) && $request->post_img != "undefined"){
                    $file =  $request->post_img;
                    $path = 'uploads/posts/'.$data->id.'/';
                    $modifiedFileName = time().'-'.$file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->post_img = $path.$modifiedFileName;
                        $data->save();
                    }
                }
            }
            return redirect()->intended('student/posts')->with('messages', 'Thêm mới thành công!');
        }
    }

    public function getEditPosts($id) {
    	$data = Posts::find($id);
    	return view('frontend.student.posts_edit', compact('data'));
    }
    public function postEditPosts(Request $request, $id) {
    	$rules = [
            'post_title' => 'required',
            'post_img' => 'mimes:png,jpg,jpeg',
            'post_content' => 'required',
        ];
        $messages = [
            'post_title.required' => 'Tiêu đề bài viết không được để trống',
            'post_img.mimes' => 'Ảnh minh họa không đúng định dạng',
            'post_content.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Posts::find($id);
            $data->post_title = $request->post_title;
            $data->post_slug = str_slug($request->post_title);
            $data->post_content = $request->post_content;
            if(!empty($request->post_img) && $request->post_img != "undefined"){
                $file =  $request->post_img;
                $path = 'uploads/posts/'.$data->id.'/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->post_img = $path.$modifiedFileName;
                }
            }
             $data->save();
            return redirect()->intended('student/posts')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function getDeletePosts($id) {
    	Posts::destroy($id);
        return back()->with("messages", "Bài viết được xóa thành công!");
    }

    public function listDevices () {
    	$data = Student::find(Auth::user()->student_id)->Device;
    	// $data = Student::with('User');
    	// dd($data);
    	return view('frontend.student.devices', compact('data'));
    }

    public function allDevices() {
    	$data = Device::paginate(10);
    	return view('frontend.student.devices_borrow', compact('data'));
    }
    public function getDevices($id) {
    	$data = new User_Device;
    	$data->count = 1;
    	$data->status = 0;
    	$data->student_id = Auth::user()->student_id;
    	$data->device_id = $id;
    	$data->save();
    	// if($data->save()) {
    	// 	$device = Device::find($id);
    	// 	$device->device_count_change = $device->device_count - $data->count;
    	// 	$device->save();
    	// }
    	return redirect('student/devices')->with('messages', 'Bạn đã đăng ký mượn thiết bị thành công. Chờ xác nhận của admin nhé.');
    }


    public function listCalendars() {
    	$data = Calendar::all();
    	// dd($data);
    	return view('frontend.student.calendars', compact('data'));
    }
    public function registerCalendars() {
    	return view('frontend.student.calendars_register');
    }
    public function registerPostCalendars(Request $request) {
    	$rules = [
            'title' => 'required',
            'date_borrow' => 'required',
            'start' => 'required',
            'end' => 'required',
        ];
        $messages = [
            'title.required' => 'Tiêu đề không được để trống',
            'date_borrow.required' => 'Ngày trực không được để trống',
            'start.required' => 'Thời gian bắt đầu không được để trống',
            'end.required' => 'Thời gian kết thúc không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Calendar;
            $data->title = $request->title;
            $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.$request->start;
            $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.$request->end;
            $data->description = $request->description;
            $data->student_id = Auth::user()->student_id;
           
            $data->save();
            return redirect()->intended('student/calendars')->with('messages', 'Đăng ký thành công!');
        }
    }
}
