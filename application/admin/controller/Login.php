<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Session;

class login extends Controller              //继承
{
    public function index()          //后台登录页面
    {
        return view();
    }
    public function login()          //后台登录     接口
    {
        $count =  Db::table('user_admin')
        ->where('id', input('id'))
        ->field('password,loginname')->find();
        $loginname = input('loginname');
        $password = input('password');

        // echo $count['loginname'];

        if(($count['loginname'] == $loginname) && ($count['password'] == $password)){
           Session::set('admin',$count['loginname']);
            return json([
                'code' => 1,
                'msg' => '登录成功'
                
            ]);
        }else if($count['loginname'] == $loginname){
            return json([
                'code' => 0,
                'msg' => '密码错误',
            ]);
        }else{
            return json([
                'code' => 0,
                'msg' => '账号或者密码错误',
            ]);
        }
    }
    public function logout()          //后台退出 接口
    {
        Session::delete('admin');
        $this->redirect(url('Login/index'));
        return json([
            'code' => 0,
            'msg' => '已退出',
        ]);
    }



}