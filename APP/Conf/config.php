<?php
return array(
		
		//数据库部署
		'DB_HOST'=>'127.0.0.1',
		'DB_USER'=>'root',
		'DB_PWD'=>'admin',
		'DB_NAME'=>'cars',
		'DB_PREFIX'=>'up_',
		'DB_PORT' =>  '3307',  
		
		'COOKIE_EXPIRE' => 60,
		
		//应用分组
		'APP_GROUP_LIST'=>'Index,Admin',
		'DEFAULT'=>'Index',
		'APP_GROUP_MODE'=>'1',
		'APP_GROUP_PATH'=>'Modules',
		
		'LOAD_EXT_CONFIG'=>'verify',
		
		
		'URL_HTML_SUFFIX'=>'',
		
		'URL_ROUTER_ON'   => true, //开启路由
		'URL_ROUTE_RULES' => array( //定义路由规则
				'news'    => 'Index/',
		),
		
);
?>