<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��addcslashes()������stripslashes()�����ֱ���ַ�������ת��ͻ�ԭ</title>
</head>

<body>
<?php
 $str = "select * from tb_book where bookname = 'PHP5�����ŵ���ͨ'";
 echo $str."<br>";								//����ַ���
 $a = addslashes($str);							//���ַ����е������ַ�����ת��
 echo $a."<br>";								//���ת�����ַ�
 $b = stripslashes($a);							//��ת�����ַ����л�ԭ
 echo $b."<br>";								//���ַ�ԭ�����
?>
</body>
</html>