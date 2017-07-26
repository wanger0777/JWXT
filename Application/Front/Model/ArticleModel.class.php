<?php
/**
 * Created by PhpStorm.
 * User: qingyun
 * Date: 17/7/24
 * Time: 下午9:08
 */
namespace Front\Model;
class ArticleModel extends \Think\Model{
    //自定义该模型对应的表
    protected $tableName = 'categories';
    //自定义表前缀
    protected $tablePrefix = 'top_';
    //定义真实的对应数据库中的表名字
    protected $trueTableName = 'jw_article';

    public function modIt(){
        echo 'modIt';
    }
}