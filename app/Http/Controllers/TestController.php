<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $h = date('H');
        // 09
        if ($h<6 || $h>8){
            var_dump(111);exit;
        }else{
            var_dump(222);exit;
        }
        var_dump($h);exit;
    }
}
