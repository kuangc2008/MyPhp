<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
<link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__ROOT__/Public/Js/check.js"></script>
</head>
<body>
<form name="form1" method="post"  action="__URL__/index" onSubmit="return chkinput(this)" >
<table id="__01" width="404" height="205" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="5">
			<img src="__ROOT__/Public/images/66_01.gif" width="404" height="53" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="__ROOT__/Public/images/66_02.gif" width="132" height="151" alt=""></td>
		<td>
			<img src="__ROOT__/Public/images/66_03.gif" width="1" height="102" alt=""></td>
		<td colspan="3" width="271" height="102" bgcolor="#FaFaFa">
        <table width="265" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td width="60" class="title" id="td">用户名：</td>
		    <td colspan="2"><input name="user" type="text" size="15" /></td>
	      </tr>
		  <tr>
		    <td class="title" id="td">密码：</td>
		    <td colspan="2"><input name="pass" type="password" size="15" /></td>
	      </tr>
		  <tr>
		    <td width="60" class="title" id="td">验证码：</td>
		    <td width="80"><input type="text" name="validatorCode" size="10" /></td>
		    <td align="center"><img src="__APP__/Index/verify/" width="85%" height="85%"/></td>
	      </tr>
		 </table>
        </td>
	</tr>
	<tr>
		<td colspan="2"><input type="image" name="imageField" id="imageField" src="__ROOT__/Public/images/66_05.gif" /></td>
		<td>
			<img src="__ROOT__/Public/images/66_06.gif" width="107" height="36" alt=""></td>
		<td>
			<img src="__ROOT__/Public/images/66_07.gif" width="60" height="36" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="__ROOT__/Public/images/66_08.gif" width="1" height="13" alt=""></td>
		<td colspan="3">
			<img src="__ROOT__/Public/images/66_09.jpg" width="271" height="13" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="132" height="1" alt=""></td>
		<td>
			<img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="104" height="1" alt=""></td>
		<td>
			<img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="107" height="1" alt=""></td>
		<td>
			<img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="60" height="1" alt=""></td>
	</tr>
</table>
</form>
</body>
</html>