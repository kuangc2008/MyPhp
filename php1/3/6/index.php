<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ֵΪnull�ļ������</title>
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
echo "����(\$string1)ֱ�Ӹ�ֵΪnull��";
$string1 = null;									//����$string1������ֵ
$string3 = "str";									//����$string3����ֵstr
if(is_null($string1))								//�ж�$string1�Ƿ�Ϊ��
	echo "string1 = null";
echo "<p>����(\$string2)δ����ֵ��";
if(is_null($string2))								//�ж�$string2 �Ƿ�Ϊ��
	echo "string2 = null";
echo "<p>��unset()����������ı���(\$string3)��";	
unset($string3);									//�ͷ�$string3
if(is_null($string3))								//�ж�$string3�Ƿ�Ϊ��
	echo "string3 = null";

?>
</div>
</body>
</html>
