<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��number_format()������ָ���������ַ������и�ʽ��</title>
</head>
<body>
<?php 
$number = 1868.96; 									//���������ַ�������
echo number_format($number);						//�����ʽ����������ַ���
echo "<br>";										//ִ�л���
echo number_format($number, 2);						//�����ʽ����������ַ���
echo "<br>";										//ִ�л���
$number2 = 11886655.760055;							//���������ַ�������
echo number_format($number2, 2, '.', '.');			//�����ʽ����������ַ���
?>
</body>
</html>
