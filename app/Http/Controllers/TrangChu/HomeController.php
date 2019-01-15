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
        $posts= Posts::orderBy('created_at', 'desc')->paginate(4);
        $projects = Project::orderBy('created_at', 'desc')->paginate(4);
    	return view('frontend.index', compact('posts', 'projects'));
    }

    public function getContact() {
    	return view('frontend.contact');
    }

    public function getIntro() {
    	return view('frontend.intro');
    }

    public function getNews() {
    	return view('frontend.news');
    }

    public function getDevice() {
        $data = Device::orderBy('created_at', 'desc')->paginate(7);
    	return view('frontend.device', compact('data'));
    }

    public function getProject() {
    	return view('frontend.project');
    }
}
