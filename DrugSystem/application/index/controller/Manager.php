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
                return $this->success('药品入库成功', 'manager/lis');
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
}
