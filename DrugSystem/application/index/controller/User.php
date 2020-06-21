<?php
namespace app\index\controller;

use think\Controller;

class User extends Controller
{
    public function druginquirylist()
    {
        $result=db('drug')->select();
        $this->assign('result', $result);
        return $this->fetch();
        // $("body").on("click",".num-jian",function (m) {
        //     var obj = $(this).closest("ul").find(".input-num");
        //     if (obj.val() <= 0) {
        //          obj.val(0);
        //     } else {
        //          obj.val(parseInt(obj.val()) - 1);
        //     }
        //     obj.change();
        // });
        // $("body").on("click",".num-jia",function (m) {
        //     var obj = $(this).closest("ul").find(".input-num");
        //     obj.val(parseInt(obj.val()) + 1);
        //     obj.change();
        // });
    }
    public function drugoutfo()
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
    public function userinfo()
    {
        $id=input('id');
        $result=db('login')->find($id);
        $this->assign('result', $result);
        return $this->fetch();
    }
}
