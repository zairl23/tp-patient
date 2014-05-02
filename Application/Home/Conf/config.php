<?php
return array(
	'URL_HTML_SUFFIX' => '', // no suffix
	'URL_MODEL'       => 2,// rewrite
	'URL_PARAMS_BIND' =>  true, // URL变量绑定到操作方法作为参数
	// 开启路由
	'URL_ROUTER_ON'   => true, 
	//'配置项'=>'配置值'
	'URL_ROUTE_RULES' => array(
        //'/'                      => 'Patient/index',
	    'news/:year/:month/:day' => array('News/archive', 'status=1'),
    	'patient/store'          => 'Patient/store',
    	'patient/edit/:id'       => 'Patient/edit',
    	'patient/update/:id'     => 'Patient/update',
    	'patient/delete/:id'     => 'Patient/delete',
    	'record/create/:id'      => 'Record/create',
    	'record/store/:id'       =>  'Record/store',
    	'record/edit/:id'        =>  'Record/edit',
    	'record/update/:id'      =>  'Record/update',
    	'record/delete/:id'      =>  'Record/delete',
 	),
);