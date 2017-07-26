<?php
/**
 * Created by PhpStorm.
 * User: qingyun
 * Date: 17/7/24
 * Time: 下午8:38
 */
namespace Front\Controller;
use Front\Model\UserModel;
use Think\Controller;
class UserController extends Controller{
    public  function user(){
        echo '我是user控制器';
    }
    public function add(){
        echo 'User-add';
        echo '<br>';

        //普通方法
        $m = new UserModel();
        $m->userInfo();

        echo '<br>';
        //使用D函数
        $n = D('User');
        $n->userInfo();

        $y = D('Article');
        $y->modIt();

        echo '<br>';
        $x = M('Article');
        print_r($x->select());

        echo '<br>';
        $kk = M('Member');
        print_r($kk->select());

        echo '<br>';
        $mm = new Model('Member');
        print_r($mm->find());

        echo '<br>';
        $nn = D('Member');
        print_r($nn->find());
    }
}

