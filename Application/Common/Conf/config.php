<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'        =>  'Front',  // 默认模块
    'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_ROUTER_ON'         =>  false,   // 是否开启URL路由
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'JWXT',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'wangpengwei1314',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'jw_',    // 数据库表前缀
    'URL_CASE_INSENSITIVE' =>true,  //url地址不区分大小写
);