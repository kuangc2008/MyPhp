<?php
define('THINK_PATH', './ThinkPHP');		//定义ThinkPHP框架路径(相对于入口文件)
define('APP_NAME', 'Admin');				//定义项目名称
define('APP_PATH', 'Admin');				//定义项目路径
require(THINK_PATH."/ThinkPHP.php");	//加载框架入口文件 
App::run();								//实例化一个网站应用实例
?>
