<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用strcmp()和strcasecmp()函数分别对两个字符串按字节进行比较</title>
</head>

<body>
<?php 
$str1="明日编程词典!";					//定义字符串常量
$str2="明日编程词典!"; 					//定义字符串常量
$str3="mrsoft";							//定义字符串常量
$str4="MRSOFT";						//定义字符串常量	
echo strcmp($str1,$str2)." kc ";    				//这两个字符串相等
echo strcmp($str3,$str4)." kc ";   				//注意该函数区分大小写
echo strcasecmp($str3,$str4)." kc ";				//该函数不区分字母大小写
?>
</body>
</html>
