<?php
setcookie("TMCookie",'www.mrbccd.com');
setcookie("TMCookie", 'www.mrbccd.com', time()+60);    	  //����cookie��Чʱ��Ϊ60��
//������Чʱ��Ϊ60�룬��ЧĿ¼Ϊ��/tm/��,��Ч����Ϊ��mrbccd.com����������������
setcookie("TMCookie", $value, time()+3600, "/tm/",". mrbccd.com", 1); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<script language="javascript" src="datetime.js"></script>
<?php
date_default_timezone_set("Etc/GMT-8");
echo "<br>��ǰʱ�䣺" , date("Y-m-d H:i:s") , "<br>";
echo $_COOKIE['TMCookie'];
?>
