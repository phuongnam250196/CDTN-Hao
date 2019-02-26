<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use App\Project;
use App\Device;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use Validator;
use Auth;

class HomeController extends Controller
{
    public function getIndex() {
        $posts= Posts::orderBy('created_at', 'desc')->where('post_status', 1)->limit(5)->get();
        $projects = Project::orderBy('created_at', 'desc')->paginate(5);
        $devices = Device::limit(3)->get();
    	return view('frontend.index', compact('posts', 'projects', 'devices'));
    }

    public function getContact() {
    	// $name = 'a';
     //        Mail::send('emails.test',['name'=> $name], function($m) use ($name) {
     //                    $m->to('phuongnam250196@gmail.com')->subject('tdsfsdfdsest');
     //                });
        return view('frontend.contact');
    }
    public function postContact(Request $request) {
        $rules = [
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required',
        ];
        $messages = [
            'name.required' => 'Họ tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'message.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Contact;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->content = $request->message;
            if($data->save()) {
                Mail::send('emails.contact',['data'=> $data], function($m) use ($data) {
                    $m->to('Taxuanhao0207@gmail.com')->subject('Liên hệ từ '.$data->name);
                });
            }
            return back()->with('messages', 'Bạn đã gửi tin nhắn thành công cho quản trị viên.');
        }
    }

    public function getIntro() {
    	return view('frontend.intro');
    }

    public function getNews() {
        $data = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->paginate(7);
        $projects = Project::orderBy('created_at', 'desc')->limit(5)->get();
        $devices = Device::orderBy('created_at', 'desc')->limit(5)->get();
    	return view('frontend.news', compact('data', 'projects', 'devices')); 
    }
    public function getNewsDetail($id) {
        $data = Posts::find($id);
        $posts = Posts::where('post_status', 1)->where('id', '!=', $id)->orderBy('created_at', 'desc')->paginate(5);
        $projects = Project::orderBy('created_at', 'desc')->limit(3)->get();
        return view('frontend.news_detail', compact('data', 'posts', 'projects'));
    }

    public function getDevice() {
        $data = Device::orderBy('created_at', 'desc')->paginate(5);
        $posts = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->limit(5)->get();
    	return view('frontend.device', compact('data', 'posts'));
    }
    public function getDeviceDetail($id) {
        $data = Device::find($id);
        $posts = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.device_detail', compact('data', 'posts'));
    }

    public function getProject() {
        $data = Project::orderBy('created_at', 'desc')->paginate(9);
        $posts = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->limit(5)->get();
    	return view('frontend.project', compact('data', 'posts'));
    }
    public function getProjectDetail($id) {
        $data = Project::find($id);
        $posts = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->limit(5)->get();
        return view('frontend.project_detail', compact('data', 'posts'));
    }

    public function getSearch(Request $request) {
        $posts = Posts::where('post_title', 'like', '%'.$request->search.'%')->where('post_status', 1)->orderBy('created_at', 'desc')->paginate(5);
        // dd($data);
        if(!empty(Auth::user()->student_id)) {
             return view('frontend.student.index', compact('posts'));
        } else {
            return view('frontend.teacher.index', compact('posts'));
        }
       
    }
}
