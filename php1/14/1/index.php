<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>成员方法</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
	class SportObject{
		function beatBasketball($name,$height,$avoirdupois,$age,$sex){				//声明成员方法
			if($height>180 and $avoirdupois<=100){
				return $name."，符合打篮球的要求!";			//方法实现的功能
			}else{
				return $name."，不符合打篮球的要求!";			//方法实现的功能
			}
		}
	}
	$sport=new SportObject();
	echo $sport->beatBasketball('明日','185','80','20周岁','男');
?>
</body>
</html>
