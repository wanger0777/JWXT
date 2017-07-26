<?php
/**
 * Created by PhpStorm.
 * User: qingyun
 * Date: 17/7/25
 * Time: 下午1:51
 */
namespace Admin\Controller;
use Think\Controller;
class AccessController extends Controller
{
    public function role_list()
    {
        $db = M("role");
        $where = "";
        $count = $db->where($where)->count();
        $pagecount = 4;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $list = $db->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();

    }
    public function role_add()
    {
        if(IS_POST)
        {
            $data = $_POST;
            $db = D('role');
            if($id = $db->addRole($data))
            {
                $this->ajaxReturn(['status'=>1,'info'=>'成功','data'=>$id]);
            }else{
                $this->ajaxReturn(['status'=>0,'info'=>'失败','data'=>0]);
            }
        }
        if(IS_GET)
        {
            $this->display();
        }

    }

}