<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��Session����ʵ�������һ���</title>
<style type="text/css">
<!--
.style6 {
	font-size: 24px;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>
<?php
	$_SESSION[color1]=$_POST[select];
?>	
<body style="background-color:<?php echo $_SESSION[color1];?>">
<table width="1024" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr align="center" valign="middle">
    <td height="80" colspan="2" class="style6">������</td>
  </tr>
  <tr valign="middle">
    <td width="209" height="479" valign="top"><br>
        <span>&nbsp;&nbsp;***����������,��ӭ����!!</span><br>
&nbsp;&nbsp;<?php echo date("y-m-d h:i:s");?>
</td>
    <td  valign="top"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;��������ʾ���������,ϣ��������������ҵĹ���,��Ҫ���������д����������ĺͷǷ�������,лл����! </span></td>
  </tr>
  <tr valign="middle">
    <td height="50" colspan="2"><p><br>
      ������ѡ����ϲ������ɫ������ҳ��Ҳ���漴���£�</p>
      <form name="form1" method="post" action="">
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ѡ����ϲ���ķ��</span>
        <select name="select" id="select">
          <option value="green">����ɫ</option>
          <option value="yellow">����ɫ</option>
          <option value="white">����ɫ</option>
          <option value="red">�ʺ�ɫ</option>
          <option value="gray">���ɫ</option>
          <option value="lavender" selected>Ѭ�²�</option>
          </select>
      <input type="submit" name="Submit" value="�ύ">
    </form></td>
  </tr>
</table>
</body>
</html>
