<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������</title>
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
function come() {					//����com����
    echo "����<p>";
}
function go($name = "jack") {		//����go����
    echo $name."����<p>";
}
function back($string)				//����back����
{
    echo "�ֻ����ˣ�$string<p>";
}
$func = "come";						//����һ����������������ֵΪ��come��
$func(); 							//ʹ�ñ������������ú���come()
$func = "go";						//���¸�������ֵ
$func("Tom"); 						//ʹ�ñ������������ú���go()
$func = "back";						//���¸�������ֵ
$func("Lily");						//ʹ�ñ������������ú���back();
?>
</body>
</html>
