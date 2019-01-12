<?php

namespace App\Http\Controllers\Admin;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Posts::where('post_status', 0)->orderby('created_at', 'desc')->paginate(10);
        return view('backend.posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'post_title' => 'required',
            'post_img' => 'required | mimes:png,jpg,jpeg',
            'post_content' => 'required',
        ];
        $messages = [
            'post_title.required' => 'Tiêu đề bài viết không được để trống',
            'post_img.required' => 'Ảnh minh họa không được để trống',
            'post_img.mimes' => 'Ảnh minh họa không đúng định dạng',
            'post_content.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Posts;
            $data->post_title = $request->post_title;
            $data->post_slug = str_slug($request->post_title);
            $data->post_content = $request->post_content;
            $data->post_status = 0;
            if($data->save()) {
                if(!empty($request->post_img) && $request->post_img != "undefined"){
                    $file =  $request->post_img;
                    $path = 'uploads/posts/'.$data->id.'/';
                    $modifiedFileName = time().'-'.$file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->post_img = $path.$modifiedFileName;
                        $data->save();
                    }
                }
            }
            return redirect()->intended('admin/posts')->with('messages', 'Thêm mới thành công!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts, $id)
    {
        $data = Posts::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts, $id)
    {
        $data = Posts::find($id);
        return view('backend.posts.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('a');
        $rules = [
            'post_title' => 'required',
            'post_img' => 'mimes:png,jpg,jpeg',
            'post_content' => 'required',
        ];
        $messages = [
            'post_title.required' => 'Tiêu đề bài viết không được để trống',
            'post_img.mimes' => 'Ảnh minh họa không đúng định dạng',
            'post_content.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Posts::find($id);
            // dd($data);
            $data->post_title = $request->post_title;
            $data->post_slug = str_slug($request->post_title);
            $data->post_content = $request->post_content;
            if(!empty($request->post_img) && $request->post_img != "undefined"){
                $file =  $request->post_img;
                $path = 'uploads/posts/'.$data->id.'/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->post_img = $path.$modifiedFileName;
                }
            }
             $data->save();
            return redirect()->intended('admin/posts')->with('messages', 'Cập nhật thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts, $id)
    {
        Posts::destroy($id);
        return back()->with("messages", "Bài viết được xóa thành công!");
    }

    public function getAllowList() {
        // dd('a');
        $data = Posts::where('post_status', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.posts.allow', compact('data'));
    }
    public function getAllow($id) {
        $data = Posts::find($id);
        $data->post_status = 1;
        $data->save();
        return back()->with('messages', 'Bài viết đã được hiển thị');
    }

    public function getDenyList() {
        $data = Posts::where('post_status', 2)->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.posts.allow', compact('data'));
    }
    public function getDeny($id) {
        $data = Posts::find($id);
        $data->post_status = 2;
        $data->save();
        return back()->with('messages', 'Bài viết đã bị cấm hiển thị');
    }
}
