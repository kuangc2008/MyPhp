<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ȡ������</title>
</head>
<body>
<?php
	$num = 1234;						//����һ�����ͱ���
	$math = &$num;						//����һ���Ա���$num������$math
	echo "\$math is:  ".$math."<br>";	//�������$math
	unset($math);						//ȡ������$math
	echo "\$math is: ".$math."<br>";	//�ٴ��������
	echo "\$num is:  ".$num;			//���ԭ����
?>
</body>
</html>
