<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��substr()������ȡ�ַ�����ָ�����ȵ��ַ�</title>
</head>
<body>
<?php 
echo substr("She is a well-read girl",0);    	   //�ӵ�6���ַ���ʼ��ȡ
echo "<br>";
echo substr("She is a well-read girl",4,14);  	   //�ӵ�4���ַ���ʼ������ȡ14���ַ�
echo "<br>";
echo substr("She is a well-read girl",-4,4);        //�ӵ�����4����ʼ��ȡ4���ַ�
echo "<br>";
echo substr("She is a well-read girl",0,-4);        //�ӵ�һ���ַ���ʼ��ȡ,��ȡ��������4���ַ�
?>
</body>
</html>
