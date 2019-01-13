<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function getIndex() {
    	return view('frontend.student.index');
    }

    public function getInfo() {
    	return view('frontend.student.info');
    }

    public function getUpdateInfo() {
    	return view('frontend.student.info_update');
    }
}
