<?php
/**
 * Created by PhpStorm.
 * User: qingyun
 * Date: 17/7/26
 * Time: 下午1:21
 */
namespace Common\Model;
use Think\Model;
class RoleModel extends Model
{
    public $errorInfo;
    public function addRole($data)
    {
        if(!isset($data['role_name']) || mb_strlen($data['role_name'])<2 || mb_strlen($data['role_name'])>6 )
        {
            $this->errorInfo = '角色名字填写有误';
            return false;
        }
        if(!isset($data['role_remark']) || mb_strlen($data['role_remark'])>100)
        {
            $this->errorInfo = '备注信息不存在或备注信息过长';
            return false;
        }
        if(isset($data['role_school']))
        {
            if($data['role_school']<1)
            {
                $this->errorInfo = '学校信息有误';
            }
        }else{
            $data['role_school'] = 0;
        }

        $condition['role_name'] = $data['role_name'];
        $condition['role_school'] = $data['role_school'];

        if($this->where($condition)->find())
        {
            $this->errorInfo = '该角色已存在';
            return false;
        }

        if($id = $this->add($data))
        {
            return $id;
        }else{
            $this->errorInfo = '添加失败';
            return false;
        }


    }
}