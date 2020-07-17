<?php
namespace app\index\controller;

use think\Controller;

class Manager extends Controller
{
    public function inventorylist()
    {
        $result=db('drug')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function druginfo()
    {
        $id=input('id');
        $result=db('drug')->find($id);
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function update()
    {
        if (request()->isPost()) {
            $data=[
            'id'=>input('id'),
            'drugname'=>input('drugname'),
            'image'=>input('image'),
            'num'=>input('num')+input('num2'),
            'attribute'=>input('attribute')
            ];
            if (db('drug')->update($data)) {
                return $this->success('药品入库成功', 'Manager/inventorylist');
            } else {
                return $this->error('入库失败');
            }
        }
        $result=db('drug')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function managerinfo()
    {
        $id=input('id');
        $result=db('login')->find($id);
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function updatemanager()
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
                return $this->success('库存管理员修改成功', 'Index/indexmanager');
            } else {
                return $this->error('修改失败');
            }
        }
        $result=db('login')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
}
