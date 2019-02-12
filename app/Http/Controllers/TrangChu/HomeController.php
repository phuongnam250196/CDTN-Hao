<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use App\Project;
use App\Device;

class HomeController extends Controller
{
    public function getIndex() {
        $posts= Posts::orderBy('created_at', 'desc')->where('post_status', 1)->limit(5)->get();
        $projects = Project::orderBy('created_at', 'desc')->paginate(5);
        $devices = Device::limit(3)->get();
    	return view('frontend.index', compact('posts', 'projects', 'devices'));
    }

    public function getContact() {
    	return view('frontend.contact');
    }

    public function getIntro() {
    	return view('frontend.intro');
    }

    public function getNews() {
        $data = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->paginate(7);
    	return view('frontend.news', compact('data')); 
    }
    public function getNewsDetail($id) {
        $data = Posts::find($id);
        $posts = Posts::where('post_status', 1)->where('id', '!=', $id)->orderBy('created_at', 'desc')->paginate(5);
        $projects = Project::orderBy('created_at', 'desc')->paginate(3);
        return view('frontend.news_detail', compact('data', 'posts', 'projects'));
    }

    public function getDevice() {
        $data = Device::orderBy('created_at', 'desc')->paginate(5);
    	return view('frontend.device', compact('data'));
    }
    public function getDeviceDetail($id) {
        $data = Device::find($id);
        $posts = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.device_detail', compact('data', 'posts'));
    }

    public function getProject() {
        $data = Project::orderBy('created_at', 'desc')->paginate(9);
        $posts = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->paginate(5);
    	return view('frontend.project', compact('data', 'posts'));
    }
    public function getProjectDetail($id) {
        $data = Project::find($id);
        $posts = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.project_detail', compact('data', 'posts'));
    }
}
