<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>不同进制的输出结果</title>
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
<div align="center">
<?php
	$str1 = 1234567890;								//声明一个10进制整数
	$str2 = 0x1234567890;	 						//声明一个16进制的整数
	$str3 = 01234567890;							//声明一个8进制的整数
	$str4 = 01234567;								//声明另一个8进制的整数
	echo '数字1234567890不同进制的输出结果：<p>';
	echo '10进制的结果是：'.$str1.'<br>';					//输出10进制整数
	echo '16进制的结果是：'.$str2.'<br>';				//输出16进制整数
	echo '8进制的结果是：';
	if($str3 == $str4){									//判断$str3 和$str4的关系
		echo '$str3 = $str4 = '.$str3;					//如果相等，输出变量值
	}else{
		echo '$str3 != str4';						//如果不相等，输出“$str3 != $str4”
	}
?>
</div>
</body>
</html>
