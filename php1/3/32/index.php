<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 12px;
	margin-top: 12px;
}
-->
</style></head>
<body>
<?php
	echo '����IP�ǣ�'.$_SERVER['REMOTE_ADDR'];
	echo '<br>';
	echo '��ʹ�õĶ˿��ǣ�'.$_SERVER['REMOTE_PORT'];
	echo '<p><p>';
	foreach($_SERVER as $key => $value){
		echo '<font color=red>'.$key.'</font>&nbsp;<font color=blue>'.$value.'</font><p>';
	}
		
?>
</body>
</html>
