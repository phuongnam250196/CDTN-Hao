<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Teacher;
use App\Posts;
use App\Device;
use App\User_Device;
use App\Calendar;
use Auth;
use Validator;

class TeachersController extends Controller
{
    public function getIndex() {
    	return view('frontend.teacher.index');
    }

    public function getInfo() {
    	$data = User::find(Auth::id())->Teacher;
    	return view('frontend.teacher.info', compact('data'));
    }

    public function getUpdateInfo() {
    	$data = User::find(Auth::id())->Teacher;
    	// dd($data);
    	return view('frontend.teacher.info_update', compact('data'));
    }

    public function postUpdateInfo(Request $request) {
    	$rules = [
            'teacher_name' => 'required',
            'teacher_phone' => 'required',
            'teacher_avatar' => 'mimes:jpg,png,jpeg',
        ];
        $messages = [
            'teacher_name.required' => 'Họ tên không được để trống',
            'teacher_phone.required' => 'Số điện thoại không được để trống',
            'teacher_avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Teacher::find(Auth::user()->teacher_id);
            $data->teacher_name = $request->teacher_name;
            $data->teacher_phone = $request->teacher_phone;

            if(!empty($request->teacher_avatar) && $request->teacher_avatar != "undefined"){
                $file =  $request->teacher_avatar;
                $path = 'uploads/teachers/'.$data->id.'/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->teacher_avatar = $path.$modifiedFileName;   
                }
            }
            $data->save();
            return redirect()->intended('/teacher/info')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function listPosts() {
    	$data = Posts::where('teacher_id', Auth::user()->teacher_id)->orderBy('created_at', 'desc')->paginate(5);
    	return view('frontend.teacher.posts', compact('data'));
    }

    public function getCreatePosts() {
    	return view('frontend.teacher.posts_create');
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
            $data->teacher_id = Auth::user()->teacher_id;
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
            return redirect()->intended('teacher/posts')->with('messages', 'Thêm mới thành công!');
        }
    }

    public function getEditPosts($id) {
    	$data = Posts::find($id);
    	return view('frontend.teacher.posts_edit', compact('data'));
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
            return redirect()->intended('teacher/posts')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function getDeletePosts($id) {
    	Posts::destroy($id);
        return back()->with("messages", "Bài viết được xóa thành công!");
    }

    public function listDevices () {
        $data = Teacher::find(Auth::user()->teacher_id)->Device;
        return view('frontend.teacher.devices', compact('data'));
    }

    public function allDevices() {
        $data = Device::orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.teacher.devices_borrow', compact('data'));
    }
    public function getDevices($id) {
        $data = Device::find($id);
        return view('frontend.teacher.devices_borrow_add', compact('data'));
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
            $data->teacher_id = Auth::user()->teacher_id;
            $data->device_id = $id;
            $data->save();
       
            return redirect('teacher/devices')->with('messages', 'Bạn đã đăng ký mượn thiết bị thành công. Chờ xác nhận của admin nhé.');
        }
    }

    public function listCalendars() {
        $data = Calendar::all();
        // dd($data);
        return view('frontend.teacher.calendars', compact('data'));
    }
    public function registerCalendars() {
        return view('frontend.teacher.calendars_register');
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
            $data->teacher_id = Auth::user()->teacher_id;
           
            $data->save();
            return redirect()->intended('teacher/calendars')->with('messages', 'Đăng ký thành công!');
        }
    }
}
