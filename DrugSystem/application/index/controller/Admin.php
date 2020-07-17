<?php
namespace app\index\controller;

use think\Controller;

class Admin extends Controller
{
    public function listadmin()
    {
        $result=db('login')->where('type', 'like', '1')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function listmanager()
    {
        $result=db('login')->where('type', 'like', '2')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function listuser()
    {
        $result=db('login')->where('type', 'like', '3')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function adduserinfo()
    {
        if (request()->isPost()) {
            $data=[
            'username'=>input('username'),
            'password'=>input('password'),
            'type'=>input('type'),
            'number'=>input('number'),
            'address'=>input('address')
            ];
            if ($_FILES['image']['tmp_name']) {
                $file = request()->file('image');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/index/images');
                $data['image']='index/images/'.$info->getSaveName();
            }
            if (db('login')->insert($data)) {
                if ($data['type']==1) {
                    return $this->success('系统管理员添加成功', 'Admin/listadmin');
                }
                if ($data['type']==2) {
                    return $this->success('库存管理员添加成功', 'Admin/listmanager');
                }
                if ($data['type']==3) {
                    return $this->success('用户添加成功', 'Admin/listuser');
                }
            } else {
                return $this->error('添加失败');
            }
        }
        $result=db('login')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function modifyuserinfo()
    {
        $id=input('id');
        $result=db('login')->find($id);
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function update()
    {
        if (request()->isPost()) {
            $data=[
                'id'=>input('id'),
                'username'=>input('username'),
                'password'=>input('password'),
                'type'=>input('type'),
                'number'=>input('number'),
                'address'=>input('address')
                ];
            if ($_FILES['image']['tmp_name']) {
                $file = request()->file('image');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/index/images');
                $data['image']='index/images/'.$info->getSaveName();
            }
            if (db('login')->update($data)) {
                if ($data['type']==1) {
                    return $this->success('系统管理员修改成功', 'Admin/modifyuserinfo');
                }
                if ($data['type']==2) {
                    return $this->success('库存管理员修改成功', 'Admin/listmanager');
                }
                if ($data['type']==3) {
                    return $this->success('用户修改成功', 'Admin/listuser', array('id'=>input('id')));
                }
            } else {
                return $this->error('修改失败');
            }
        }
        $result=db('login')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function del()
    {
        $id=input('id');
        $result=db('login')->find($id);
        $this->assign('result', $result);
        if ($id !=1) {
            if (db('login')->delete($id)) {
                if ($result['type']==1) {
                    return $this->success('系统管理员删除成功', 'Admin/listadmin');
                }
                if ($result['type']==2) {
                    return $this->success('库存管理员删除成功', 'Admin/listmanager');
                }
                if ($result['type']==3) {
                    return $this->success('用户删除成功', 'Admin/listuser');
                }
            } else {
                return $this->error('删除失败');
            }
        } else {
            return $this->error('超级管理员不允许删除');
        }
    }
    public function druglist()
    {
        $result=db('drug')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function adddrug()
    {
        if (request()->isPost()) {
            $data=[
            'drugname'=>input('drugname'),
            'num'=>input('num'),
            'attribute'=>input('attribute')
            ];
            if ($_FILES['image']['tmp_name']) {
                $file = request()->file('image');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['image']='uploads/'.$info->getSaveName();
            }
            if (db('drug')->insert($data)) {
                return $this->success('药品添加成功', 'Admin/druglist');
            } else {
                return $this->error('添加失败');
            }
        }
        $result=db('drug')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function modifydrug()
    {
        $id=input('id');
        $result=db('drug')->find($id);
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function updatedrug()
    {
        if (request()->isPost()) {
            $data=[
            'id'=>input('id'),
            'drugname'=>input('drugname'),
            'num'=>input('num'),
            'attribute'=>input('attribute')
            ];
            if ($_FILES['image']['tmp_name']) {
                $file = request()->file('image');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['image']='uploads/'.$info->getSaveName();
            }
            if (db('drug')->update($data)) {
                return $this->success('药品修改成功', 'Admin/druglist');
            } else {
                return $this->error('修改失败');
            }
        }
        $result=db('drug')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function deldrug()
    {
        $id=input('id');
        $result=db('drug')->find($id);
        $this->assign('result', $result);
        if ($id !=1) {
            if (db('drug')->delete($id)) {
                return $this->success('药品删除成功', 'Admin/druglist');
            } else {
                return $this->error('删除失败');
            }
        } else {
            return $this->error('超级管理员不允许删除');
        }
    }
}
