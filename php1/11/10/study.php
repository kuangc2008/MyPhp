<?php
session_start();
if($_COOKIE['cookie1']!=''){	  
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="refresh" content="10;url=study.php">
<title>ʹ��COOKIE�����û�������վ��ʱ��</title>
<style type="text/css">
<!--
.style1 {
	font-size: 25px;
	font-family: "�����п�";
}
-->
</style></head>

<body>
<table width="392" height="178" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
  <tr>
    <td height="176" align="center">&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="style1">
    <p>�û�����</p></span>    <p> &nbsp;&nbsp;&nbsp; ����ǰʹ�õ��ǡ����ð�ѧϰ��Դ��������ҪӦ��COOKIEʵ�ֶ���վ����ʱ������ƣ������������վ��ͣ����ʱ�䳬����վ�涨�ķ���ʱ��ʱ�����Զ���ת����¼ҳ�棬ֻ�����µ�¼�ſ��Լ������� </p>      <p class="style1">&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
}else{ 
	echo "���ڱ���վͣ����ʱ���Ѿ������������Ƶ�ʱ��,ϵͳ����5���Ӻ��˳���¼!!лл!���Ե�...";
	echo "<meta http-equiv=\"Refresh\" content=\"5;url=index.php\">";
}
?>