<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Request;

class EntryController extends Controller
{

    /**
     * 后台主页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * fonnie 2020/03/22 15:04:29
     */
    public function index(){

        return view('index');
    }


    /**
     * 登录视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * fonnie 2020/03/22 13:55:56
     */
    public function loginForm()
    {
        return view('admin.entry.login');
    }


    /**
     * 登录处理
     * fonnie 2020/03/22 14:05:51
     */
    public function login()
    {
        $status = Auth::guard('admin')->attempt([
            'username' => Request::input('username'),
            'password' => Request::input('password'),
        ]);

       if($status){
           return redirect('admin/index');
       }

       return redirect('admin/login')->with('error','用户名或密码错误!');
    }
}
