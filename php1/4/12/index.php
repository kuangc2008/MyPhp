<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʹ��continue�ؼ��ֿ�������</title>
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
	$arr = array("A","B","C","D","E","F","G","H","I","J");
	for($i = 0; $i < 10; $i++){
		echo "<br>";
		if($i % 2 == 0){
			continue;
		}
		for(;;){
			for($j = 0; $j < count($arr); $j++){
				if($j == $i){
					continue 3;
				}else{
					echo "\$arr[".$j."]=".$arr[$j]." ";
				}
			}
		}
		echo "��仰��Զ�������";
	}
?>
</body>
</html>
