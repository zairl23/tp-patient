<?php
return array(
	//'配置项'=>'配置值'
	//数据库配置信息
	'DB_TYPE'            => 'pdo', // 数据库类型 if php>5.5, not use mysql
	//'DB_HOST'   => 'localhost', // 服务器地址
	//'DB_NAME'   => 'tp', // 数据库名
	'DB_USER'            => 'root', // 用户名
	'DB_PWD'             => '', // 密码
	'DB_PORT'            => 3306, // 端口
	'DB_PREFIX'          => '', // 数据库表前缀 
	//'DB_CHARSET'=> 'utf8_general_ci	', // 字符集
	'DB_DSN'             => 'mysql:host=localhost;dbname=tp', // no charset
	'DEFAULT_MODULE'     => 'Home', //默认模块
	'DEFAULT_CONTROLLER' => 'Patient', //默认控制器
);