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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class StudentsController extends Controller
{
    public function getIndex() {
        $posts= Posts::orderBy('created_at', 'desc')->where('post_status', 1)->paginate(5);
    	return view('frontend.student.index', compact('posts'));
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
   //          $to_name = 'a';
			// $to_email = 'phuongnam250196@gmail.com';
			// $data = array('name'=>"Sam Jose", "body" => "Test mail");
			    
			// $name = 'Krunal';
   // 				Mail::to('phuongnam250196@gmail.com')->send(new OrderShipped($name));
	  //   	dd($a);

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
    public function postChange(Request $request) {
        $rules = [
            'password' => 'required | min:6 | max:255',
            'password_new' => 'required | min:6 | max:255',
            'password_rep' => 'required | min:6 | max:255 | same:password_new',
        ];
        $messages = [
            'password.required' => 'Mật khẩu hiện tại không được để trống',
            'password.min' => 'Mật khẩu hiện tại nhỏ hơn 6 ký tự',
            'password.max' => 'Mật khẩu hiện tại lớn hơn 255 ký tự',
            'password_new.required' => 'Mật khẩu mới không được để trống',
            'password_new.min' => 'Mật khẩu mới nhỏ hơn 6 ký tự',
            'password_new.max' => 'Mật khẩu mới lớn hơn 255 ký tự',
            'password_rep.required' => 'Mật khẩu nhập lại không được để trống',
            'password_rep.same' => 'Mật khẩu nhập lại không khớp',
            'password_rep.min' => 'Mật khẩu nhập lại nhỏ hơn 6 ký tự',
            'password_rep.max' => 'Mật khẩu nhập lại lớn hơn 255 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = User::find(Auth::id());
            if(Hash::check($request->password, $data->password)) {
                $data->password = Hash::make($request->password_new);
                $data->save();
                return redirect()->intended('student/info')->with('messages', 'Đổi mật khẩu thành công!');
            } else {
                return back()->with('messages', 'Mật khẩu cũ không đúng!');
            }
        }
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
    	$data = Device::orderBy('created_at', 'desc')->paginate(10);
    	return view('frontend.student.devices_borrow', compact('data'));
    }
    public function getDevices($id) {
    	// $data = new User_Device;
    	// $data->count = 1;
    	// $data->status = 0;
    	// $data->student_id = Auth::user()->student_id;
    	// $data->device_id = $id;
    	// $data->save();
   
    	// return redirect('student/devices')->with('messages', 'Bạn đã đăng ký mượn thiết bị thành công. Chờ xác nhận của admin nhé.');
        $data = Device::find($id);
        return view('frontend.student.devices_borrow_add', compact('data'));
    }
    public function postDevices(Request $request, $id) {
        $rules = [
            'count' => 'required',
            'type' => 'required',
        ];
        $messages = [
            'count.required' => 'Số lượng không được để trống',
            'type.required' => 'Loại không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new User_Device;
            $data->count = $request->count;
            $data->type = $request->type;
            $data->status = 0;
            $data->student_id = Auth::user()->student_id;
            $data->device_id = $id;
            $data->save();
       
            return redirect('student/devices')->with('messages', 'Bạn đã đăng ký mượn thiết bị thành công. Chờ xác nhận của admin nhé.');
        }
    }


    public function listCalendars() {
    	$data = Calendar::where('status', 1)->where('student_id', Auth::user()->student_id)->get();
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
            'ca' => 'required',
        ];
        $messages = [
            'title.required' => 'Tiêu đề không được để trống',
            'date_borrow.required' => 'Ngày trực không được để trống',
            'ca.required' => 'Ca đăng ký không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Calendar::where('student_id', Auth::user()->student_id)->where('type', $request->ca)->first();
            // dd($data);
            if(!empty($data)) {
                return back()->with('messages', 'Bạn đăng ký mượn phòng!');
            } else {
                $data = new Calendar;
                $data->title = $request->title;
                if($request->ca == 1) {
                    $data->title = "Ca 1-2: ".$request->title;
                    $data->type = 1;
                    $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.'07:00';
                    $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.'09:00';
                } elseif ($request->ca == 2) {
                    $data->title = "Ca 3-4-5: ".$request->title;
                    $data->type = 2;
                    $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.'09:30';
                    $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.'12:30';
                } elseif ($request->ca == 3) {
                    $data->title = "Ca 6-7: ".$request->title;
                    $data->type = 3;
                    $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.'13:00';
                    $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.'15:00';
                } elseif ($request->ca == 4) {
                    $data->type = 4;
                    $data->title = "Ca 8-9: ".$request->title;
                    $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.'15:30';
                    $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.'17:30';
                } elseif ($request->ca == 5) {
                    $data->type = 5;
                    $data->title = "Buổi sáng: ".$request->title;
                    $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.'07:00';
                    $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.'12:30';
                } elseif ($request->ca == 6) {
                    $data->title = "Buổi chiều: ".$request->title;
                    $data->type = 6;
                    $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.'01:00';
                    $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.'17:30';
                } else {
                    $data->title = "Cả ngày: ".$request->title;
                    $data->type = 7;
                    $data->start = date('d-m-Y', strtotime($request->date_borrow)).' '.'07:00';
                    $data->end = date('d-m-Y', strtotime($request->date_borrow)).' '.'17:30';
                }
                $data->date_borrow = date('d-m-Y', strtotime($request->date_borrow));
                $data->description = $request->description;
                $data->student_id = Auth::user()->student_id;
                $data->status = 0;
               
                $data->save();
                return redirect()->intended('student/calendars')->with('messages', 'Đăng ký thành công!');
            }

        }
    }

    public function changeDate($date) {
        $calendars = Calendar::whereNotNull('teacher_id')->where('date_borrow', date("d-m-Y", strtotime($date)))->get();
        // dd($calendars);
        return response()->json(compact('calendars'));
    }
}
