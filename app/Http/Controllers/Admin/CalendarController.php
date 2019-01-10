<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class CalendarController extends Controller
{
    public function getIndex() {
    	$date = Carbon::now();
    	return view('backend.calendars.index', compact('date'));
    }
}
