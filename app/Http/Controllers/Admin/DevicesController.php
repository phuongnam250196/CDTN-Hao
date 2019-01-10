<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DevicesController extends Controller
{
    public function getIndex() {
    	return view('backend.devices.index');
    }
}
