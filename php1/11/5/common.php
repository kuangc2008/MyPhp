<?php
error_reporting(0);
$path = './tmp/';
$sess_name = session_name();
$sess_id = $_GET[$sess_name];
session_id($sess_id);
session_save_path($path);
session_start();
if ((trim($_POST['username'])) != 'tm' and (trim($_POST['password']) != '111'))
{
	echo "<script>alert('�û������������');location.href='index.php'</script>";
}
$_SESSION['admin'] = 'mrsoft';
?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<table width="328" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100"></td>
  </tr>
  <tr>
    <td height="214" valign="top" background="images/index_01.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="100"></td>
        <td height="70"></td>
      </tr>
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="80" align="center" valign="middle"><p class="white12"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ��ϲ����¼�ɹ�<a href="connect.php?<?=session_name(); ?>=<?=session_id() ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ����ת������ҳ��</a></p>
          </td>
      </tr>
    </table></td>
  </tr>
</table>