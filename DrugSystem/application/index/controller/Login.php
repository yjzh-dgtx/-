<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller
{
    public function login()
    {
        if (request()->isPost()) {
            $data=['username'=>input('username'),'password'=>input('password')];
            $user=db('login')->where(array('username'=>$data['username']))->where('password', '=', $data['password'])->find();
            session('username', $user['username']);   //session变量username
            session('id', $user['id']);
            session('image', $user['image']);
            if ($user) {
                if ($user['type']==1) {
                    return $this->success('系统管理员登录成功', 'Index/index');
                }
                if ($user['type']==2) {
                    return $this->success('库存管理员登录成功', 'Index/indexmanager');
                }
                if ($user['type']==3) {
                    return $this->success('用户登录成功', 'Index/indexuser');
                }
            } else {
                return $this->error('用户名或密码错误');
            }
        }
        return $this->fetch();
    }
    public function logout()
    {
        session(null);   //删除session
        $this->success('退出成功', 'Login/login');
        return $this->fetch();
    }
}
