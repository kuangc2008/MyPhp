<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>switch�����ж����</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>
<body>
<table width="765" height="229" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="229" colspan="2"><img src="images/bg_03.jpg" width="765" height="229" border="0" usemap="#Map" href="index.php" /></td>
  </tr>
  <tr>
    <td width="565" height="364" align="center" valign="top">
	<?php 
		switch($_GET[lmbs]){			//��ȡ�������Ӵ��ݵı���
			case "������Ʒ":			//�ж����������ֵ���ڡ�������Ʒ��
        		include "new.php";	//��ִ�и����
    		break;					//��������ѭ��
			case "������Ʒ":
        		include "jollification.php";
    		break;
			case "�Ƽ���Ʒ":
        		include "commend.php";
    		break;
			case "������ѯ":
        		include "order_form.php";
    		break;
			default:					//�жϵ���ֵ���ڿ�ʱ��ִ����������
        		include "new.php";
    		break;
		}
	?>
</td>
    <td width="200" height="364"><img src="images/bg_07.jpg" width="200" height="364" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/bg_08.jpg" width="765" height="101" /></td>
  </tr>
</table>

<map name="Map" id="Map">
<area shape="rect" coords="9,92,65,113" href="#" /><area shape="rect" coords="78,89,131,115" href="index.php?lmbs=<?php echo urlencode("������Ʒ");?>" />
<area shape="rect" coords="145,92,201,114" href="index.php?lmbs=<?php echo urlencode("�Ƽ���Ʒ");?>" />
<area shape="rect" coords="212,91,268,114" href="index.php?lmbs=<?php echo urlencode("������Ʒ");?>" />
<area shape="rect" coords="474,93,529,113" href="index.php?lmbs=<?php echo urlencode("������ѯ");?>" />
</map></body>
</html>
