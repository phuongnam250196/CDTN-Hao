<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Calendar;
class CalendarController extends Controller
{
    public function getIndex() {
    	$date = Carbon::now();
    	$data = Calendar::all();

    	// dd($data);
    	return view('backend.calendars.index', compact('date', 'data'));
    }

    public function getCalendarListTeacher() {
    	$data = Calendar::where(function($b) {
    		$b->orWhere('teacher_id', '!=', null);
    		$b->orWhere('student_id', '!=', null);
    	})->orderBy('created_at', 'desc')->paginate(10);
    	// dd($data);
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
}
