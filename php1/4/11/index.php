<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʹ��break�ؼ�����������ѭ��</title>
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
while(true){
	for(;;){
		for($i=0;$i<=10;$i++){
			echo $i." ";
			if($i == 7){
				echo "<p>����\$i����7������һ��ѭ����<p>";
				break 1;
			}
		}
		for($j = 0; $j < 20; $j++){
			echo $j." ";
			if($j == 15){
				echo "<p>����\$j����15������������ѭ����";
				break 3;
			}
		}
	}
	echo "��仰���ᱻִ�С�";
}
?> 
</body>
</html>
