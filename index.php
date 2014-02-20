<?php
//读取配置文件
require_once 'config.php';

//读取函数库
require_once LIB.'Function_l.php';

//当找不到类时自动到库目录下寻找对应类
function __autoload($class) {
	$lib_path   = LIB.$class.'_l.php';
	$model_path = MOD.'single/'.$class.'_m.php';
	if (file_exists($lib_path)) {
		require_once $lib_path;
	} elseif (file_exists($model_path)) {
		require_once $model_path;
	}
}

//加载引导类并初始化
$bootstrap = new Bootstrap();
$bootstrap->init();