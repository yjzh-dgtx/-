<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use think\Request;

class User extends Controller
{
    public function druginquirylist()
    {
        $result = db('drug')->select();
        $cart = Session::get("shopping-cart");
        foreach ($result as $key => $item) {
            $id = $item["id"];
            $result[$key]["count"] = 0;
            if (is_array($cart) && array_key_exists($id, $cart)) {
                $result[$key]["count"] = $cart[$id];
            }
        }
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function drugoutfo()
    {
        if (request()->isGet()) {
            $cart = Session::get("shopping-cart");
            $idList = [];
            // 空的购物车
            if (empty($cart)) {
                $result = [];
                $this->assign('result', $result);
                return $this->fetch();
            }
            // 非空的购物车
            foreach ($cart as $id => $count) {
                if ($count != 0) {
                    array_push($idList, $id);
                }
            }
            $result=db('drug')->where("id", "in", $idList)->select();
            // var_dump($result);
            foreach ($result as $key => $item) {
                $id = $item["id"];
                $result[$key]["count"] = $cart[$id];
            }
            // var_dump($result);
            $this->assign('result', $result);
            return $this->fetch();
        }
        if (request()->isPost()) {
            // 医药 id
            $id = input('post.id');
            // 数量
            $count = input('post.count');
            $cart = null;
            if (!Session::has("shopping-cart")) {
                $cart = array();
                Session::set("shopping-cart", $cart);
            }
            $cart = Session::get("shopping-cart");
            $cart[$id] = $count;
            Session::set("shopping-cart", $cart);
            echo "{
                'status': 'success',
                'code': 0 
            }";
            return;
        }
        return $this->error('爬');
    }

    public function clearShoppingCart()
    {
        Session::set("shopping-cart", []);
    }
    
    public function update()
    {
        $result=db('drug')->select();
        if (request()->isPost()) {
            // 要入库的数据从购物车里拿
            $list = Session::get("shopping-cart");
            foreach ($list as $id => $count) {
                // 要先拿到医药本身的数量
                $resultList = db('drug')->where('id', 'like', $id)->select();
                $this->assign('resultList', $resultList);
                $data = $resultList[0]["num"]-$count;
                $ok = db('drug')->where('id', $id)->update(["num" => $data]);
                // 把 $id $count 改到数据库里
                if (!$ok) {
                    return $this->error('出库失败');
                }
            }
            $this->clearShoppingCart();
            return $this->success('药品出库成功', 'User/druginquirylist');
        }
    }
    public function userinfo()
    {
        $id=input('id');
        $result=db('login')->find($id);
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function updateuser()
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
                return $this->success('用户修改成功', 'Index/indexuser');
            } else {
                return $this->error('修改失败');
            }
        }
        $result=db('login')->select();
        $this->assign('result', $result);
        return $this->fetch();
    }
}
