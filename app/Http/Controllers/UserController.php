<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 个人设置页面
    public function setting(){
        return view('user.setting');
    }
    // 登陆行为
    public function settingStore(){

    }
}
