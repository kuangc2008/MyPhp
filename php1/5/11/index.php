<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��strcmp()��strcasecmp()�����ֱ�������ַ������ֽڽ��бȽ�</title>
</head>

<body>
<?php 
$str1="���ձ�̴ʵ�!";					//�����ַ�������
$str2="���ձ�̴ʵ�!"; 					//�����ַ�������
$str3="mrsoft";							//�����ַ�������
$str4="MRSOFT";						//�����ַ�������	
echo strcmp($str1,$str2)." kc ";    				//�������ַ������
echo strcmp($str3,$str4)." kc ";   				//ע��ú������ִ�Сд
echo strcasecmp($str3,$str4)." kc ";				//�ú�����������ĸ��Сд
?>
</body>
</html>
