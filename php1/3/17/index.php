<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����������ļ�Ӧ��</title>
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
	$a = -100;									//��������$a
	$b = 50;									//��������$b
	$c = 30;									//��������$c
	echo "\$a = ".$a.",";						//�������
	echo "\$b = ".$b.",";
	echo "\$c = ".$c."<p>";						//�������ģ����
	echo "\$a + \$b = ".($a + $b)."<br>";		//�������$a�� $b��ֵ
	echo "\$a - \$b = ".($a - $b)."<br>";;		//�������$a��$b��ֵ
	echo "\$a * \$b = ".($a * $b)."<br>";		//����$a��$b��ֵ
	echo "\$a / \$b = ".($a / $b)."<br>";		//����$a����$b��ֵ
	echo "\$a % \$c = ".($a % $c)."<br>";		//����$a��$b��������������Ϊ-100
	echo "\$a++ = ".$a++." ";					//�Ա���$a���к��õ�������
	echo "�����\$a��ֵΪ��".$a."<br>";
	echo "\$b-- = ".$b--." ";					//�Ա���$b���к��õݼ�����
	echo "�����\$b��ֵΪ��".$b."<br>";
	echo "++\$c = ".++$c." ";					//�Ա���$c����ǰ�õ�������
	echo "�����\$c��ֵΪ��".$c;

?>
</body>
</html>
