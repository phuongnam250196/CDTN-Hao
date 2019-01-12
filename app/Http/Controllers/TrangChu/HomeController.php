<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex() {
    	return view('frontend.index');
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
    	return view('frontend.device');
    }

    public function getProject() {
    	return view('frontend.project');
    }
}
