<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Ӧ�ýӿ�</title>
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
	interface MPopedom{
		function popedom();
	}
	interface MPurview{
		function purview();
	}
	class Member implements MPurview{
		function purview(){
			echo '��Աӵ�е�Ȩ�ޡ�';
		}
	}
	class Manager implements MPurview,MPopedom{
		function purview(){
			echo '����Աӵ�л�Ա��ȫ��Ȩ�ޡ�';
		}
		function popedom(){
			echo '����Ա���л�Աû�е�Ȩ��';
		}
	}
	$member = new Member();
	$manager = new Manager();
	$member -> purview();
	echo '<p>';
	$manager -> purview();
	$manager ->popedom();
?>
</body>
</html>
