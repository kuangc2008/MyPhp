<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��explode()����ʵ���ַ����ָ�</title>
</head>

<body>
<?php
$str="PHP��̴ʵ�@NET��̴ʵ�@ASP��̴ʵ�@JSP��̴ʵ�";			//�����ַ�������
$str_arr=explode("@",$str);										//Ӧ�ñ�ʶ@�ָ��ַ���
$array=implode("@",$str_arr);									//������ϳ��ַ���
echo $array;													//����ַ���
?>
</body>
</html>
