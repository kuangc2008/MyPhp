<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用str_ireplace()函数对查询关键字描红</title>
</head>

<body>
<?php
$content="白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！";
$str="女子公寓";
echo str_ireplace($str,"<font color='#FF0000'>".$str."</font>",$content); 	//替换字符串为红色字体
?>
</body>
</html>
