<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>类别输出</title>
<link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="405" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF">
  <tr>
    <td colspan="3" bgcolor="#FFFFFF" class="title" align="center">类别输出</td>
  </tr>
  <tr class="title">
    <td bgcolor="#FFFFFF" width="44">ID</td>
    <td bgcolor="#FFFFFF" width="120">类别名称</td>
    <td bgcolor="#FFFFFF" width="223">添加时间</td>
  </tr>
  <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): ++$i;$mod = ($i % 2 )?><tr class="content">
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($type["id"]); ?></td>
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($type["typename"]); ?></td>
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($type["dates"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>