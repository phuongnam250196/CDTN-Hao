<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Validator;

class ProjectsController extends Controller
{
    public function getIndex() {
    	$data = Project::orderBy('created_at', 'desc')->paginate(5);
    	return view('backend.projects.index', compact('data'));
    }

    public function getCreate() {
    	return view('backend.projects.create');
    }
    public function postCreate(Request $request) {
    	$rules = [
            'project_instructor' => 'required',
            'project_confectioner' => 'required',
            'project_name' => 'required',
            'project_content' => 'required',
            'project_data_start' => 'required',
            'project_data_finish' => 'required',
        ];
        $messages = [
            'project_instructor.required' => 'Người hướng dẫn không được để trống',
            'project_confectioner.required' => 'Người thực hiện không được để trống',
            'project_name.required' => 'Tên đề tài không được để trống',
            'project_content.required' => 'Nội dung không được để trống',
            'project_data_start.required' => 'Ngày bắt đầu không được để trống',
            'project_data_finish.required' => 'Ngày hoàn thành không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Project;
            $data->project_instructor = $request->project_instructor;
            $data->project_confectioner = $request->project_confectioner;
            $data->project_name = $request->project_name;
            $data->project_content = $request->project_content;
            $data->project_data_start = $request->project_data_start;
            $data->project_data_finish = $request->project_data_finish;
            $data->save();
            return redirect()->intended('admin/projects')->with('messages', 'Thêm mới thành công!');
        }
    }

    public function getEdit($id) {
    	$data = Project::find($id);
    	return view('backend.projects.edit', compact('data'));
    }
    public function postEdit(Request $request, $id) {
    	$rules = [
            'project_instructor' => 'required',
            'project_confectioner' => 'required',
            'project_name' => 'required',
            'project_content' => 'required',
            'project_data_start' => 'required',
            'project_data_finish' => 'required',
        ];
        $messages = [
            'project_instructor.required' => 'Người hướng dẫn không được để trống',
            'project_confectioner.required' => 'Người thực hiện không được để trống',
            'project_name.required' => 'Tên đề tài không được để trống',
            'project_content.required' => 'Nội dung không được để trống',
            'project_data_start.required' => 'Ngày bắt đầu không được để trống',
            'project_data_finish.required' => 'Ngày hoàn thành không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Project::find($id);
            $data->project_instructor = $request->project_instructor;
            $data->project_confectioner = $request->project_confectioner;
            $data->project_name = $request->project_name;
            $data->project_content = $request->project_content;
            $data->project_data_start = $request->project_data_start;
            $data->project_data_finish = $request->project_data_finish;
            $data->save();
            return redirect()->intended('admin/projects')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function getDelete($id) {
    	Project::destroy($id);
        return back()->with("messages", "Đề tài được xóa thành công!");
    }
}
