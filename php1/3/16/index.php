<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ɱ����</title>
</head>
<body>
<?php
$change_name = "trans";		//��������$change_name
$trans = "You can see me!";	//��������$trans
echo $change_name ;     	//�������$change_name
echo "<br>" ;
echo $$change_name ;    	//ͨ���ɱ�������$trans��ֵ
?>

</body>
</html>
