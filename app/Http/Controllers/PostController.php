<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    // 列表
    public function index()
    {
       $posts = Post::select();
        return view("post/index",compact('posts','topics'));
    }

    // 详情
    public function show()
    {
        return view("post/show");
    }

    // 创建页面
    public function create()
    {
        return view("post/create");
    }

    // 创建逻辑
    public function store()
    {
        // 验证
        $this->validate(request(),[
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10'
        ]);

        // 逻辑
        $user_id = \Auth::id();
        $params = array_merge(request(['title','content']),compact('user_id'));
        $post = Post::create($params);

        // 渲染
        return redirect("/posts");

    }

    // 编辑页面
    public function edit()
    {
        return vie("post/edis");
    }

    // 编辑逻辑
    public function update()
    {

    }

    // 删除逻辑
    public function delete()
    {

    }

}
