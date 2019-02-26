<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Calendar;
use Illuminate\Support\Facades\Mail;

class CalendarController extends Controller
{
    public function getIndex() {
    	$date = Carbon::now();
    	$data = Calendar::where('status', 1)->get();

    	// dd($data);
    	return view('backend.calendars.index', compact('date', 'data'));
    }

    public function getCalendarListTeacher() {
    	$data = Calendar::where(function($b) {
    		$b->orWhere('teacher_id', '!=', null);
    		$b->orWhere('student_id', '!=', null);
    	})->orderBy('created_at', 'desc')->where('status', 0)->paginate(10);
    	// dd($data);
    	return view('backend.calendars.list_teacher_register', compact('data'));
    }

    public function getListAllowCalendar() {
    	$data = Calendar::where(function($b) {
    		$b->orWhere('teacher_id', '!=', null);
    		$b->orWhere('student_id', '!=', null);
    	})->orderBy('created_at', 'desc')->where('status', 1)->paginate(10);
    	return view('backend.calendars.list_teacher_register', compact('data'));
    }

    public function getListDenyCalendar() {
    	$data = Calendar::where(function($b) {
    		$b->orWhere('teacher_id', '!=', null);
    		$b->orWhere('student_id', '!=', null);
    	})->orderBy('created_at', 'desc')->where('status', 2)->paginate(10);
    	return view('backend.calendars.list_teacher_register', compact('data'));
    }

    public function getEditCalendar() {
    	return view('1');
    }

    public function getDeleteCalendar($id) {
    	return back()->with('messages', 'Xóa thành công!');
    }

    public function getShowCalendar($id) {
    	$data = Calendar::find($id);
    	return response()->json(compact('data'));
    }

    public function getTeacherCalendar() {
    	$data = Calendar::where(function($b) {
    		$b->where('teacher_id', '!=', null);
    	})->orderBy('created_at', 'desc')->where('status', 0)->paginate(10);
    	return view('backend.calendars.list_teacher_register', compact('data'));
    }

    public function getStudentCalendar() {
    	$data = Calendar::where(function($b) {
    		$b->orWhere('student_id', '!=', null);
    	})->orderBy('created_at', 'desc')->where('status', 0)->paginate(10);
    	return view('backend.calendars.list_teacher_register', compact('data'));
    }

    public function getAllowCalendar($id) {
    	$data = Calendar::find($id);
    	if(empty($data)) {
    		return back()->with('messages', 'Không tồn tại ứng viên mượn phòng.');
    	} else {
    		$data->status = 1;
    		if($data->save()) {
                Mail::send('emails.calendar',['data'=> $data], function($m) use ($data) {
                    $m->to((!empty($data->Student->student_email))?$data->Student->student_email:$data->Teacher->teacher_email)->subject(((!empty($data->Student->student_name))?$data->Student->student_name:$data->Teacher->teacher_name).' Yêu cầu mượn phòng thành công ');
                });
            }
    		return back()->with('messages', 'Xác nhận thành công.');
    	}
    	// dd($data);
    }

    public function getDenyCalendar($id) {
    	$data = Calendar::find($id);
    	if(empty($data)) {
    		return back()->with('messages', 'Không tồn tại ứng viên mượn phòng.');
    	} else {
    		$data->status = 2;
    		if($data->save()) {
                Mail::send('emails.calendar',['data'=> $data], function($m) use ($data) {
                    $m->to((!empty($data->Student->student_email))?$data->Student->student_email:$data->Teacher->teacher_email)->subject(((!empty($data->Student->student_name))?$data->Student->student_name:$data->Teacher->teacher_name).' Yêu cầu mượn phòng thất bại ');
                });
            }
    		return back()->with('messages', 'Từ chối mượn phòng thành công.');
    	}
    }
}
