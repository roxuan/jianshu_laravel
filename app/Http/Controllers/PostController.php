<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 列表
    public function index()
    {
        $posts = [
            [
                'title' => "this is title1",
            ],
            [
                'title' => "this is title2",
            ],
            [
                'title' => "this is title3",
            ],
        ];
        $topics = [];
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
