<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Device;
use App\User_Device;
use Validator;

class DevicesController extends Controller
{
    public function getIndex() {
    	$data = Device::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.devices.index', compact('data'));
    }

    public function getCreate() {
    	return view('backend.devices.create');
    }
    public function postCreate(Request $request) {
    	$rules = [
            'device_code' => 'required',
            'device_name' => 'required',
            'device_count' => 'required',
            'device_type' => 'required',
            'device_description' => 'required',
        ];
        $messages = [
            'device_code.required' => 'Mã thiết bị không được để trống',
            'device_name.required' => 'Tên thiết bị không được để trống',
            'device_count.required' => 'Số lượng thiết bị không được để trống',
            'device_type.required' => 'Loại thiết bị không được để trống',
            'device_description.required' => 'Mô tả không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Device;
            $data->device_code = $request->device_code;
            $data->device_name = $request->device_name;
            $data->device_count = $request->device_count;
            $data->device_count_change = 0;
            $data->device_type = $request->device_type;
            $data->device_description = $request->device_description;
            $data->device_status = 0;
            $data->save();
            return redirect()->intended('admin/devices')->with('messages', 'Thêm mới thành công!');
        }
    }

    public function getEdit($id) {
    	$data = Device::find($id);
    	return view('backend.devices.edit', compact('data'));
    }
    public function postEdit(Request $request, $id) {
    	$rules = [
            'device_code' => 'required',
            'device_name' => 'required',
            'device_count' => 'required',
            'device_type' => 'required',
            'device_description' => 'required',
        ];
        $messages = [
            'device_code.required' => 'Mã thiết bị không được để trống',
            'device_name.required' => 'Tên thiết bị không được để trống',
            'device_count.required' => 'Số lượng thiết bị không được để trống',
            'device_type.required' => 'Loại thiết bị không được để trống',
            'device_description.required' => 'Mô tả không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Device::find($id);
            $data->device_code = $request->device_code;
            $data->device_name = $request->device_name;
            $data->device_count = $request->device_count;
            $data->device_type = $request->device_type;
            $data->device_description = $request->device_description;
            $data->save();
            return redirect()->intended('admin/devices')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function getDelete($id) {
    	Device::destroy($id);
        return back()->with("messages", "Thiết bị được xóa thành công!");
    }

    public function getBorrow() {
    	$data = User_Device::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.devices.borrow', compact('data'));
    }
    public function getBorrowUpdate($id) {
        $data = User_Device::find($id);
        $data->status = 1;
        if($data->save()) {
             $device = Device::find($data->device_id);
             $device->device_count_change = $device->device_count_change - 1;
             $device->save();
             // dd($device);
        }
        return back()->with('messages', 'Cho phép mượn thiết bị!!');
    }
    public function getBorrowDel($id) {
        $data = User_Device::find($id);
        $data->status = 2;
        $data->save();
        return back()->with('messages', 'Không mượn thiết bị!!');
    }

    public function getReturn() {
    	$data = Device::get();
    	return view('backend.devices.return', compact('data'));
    }
}
