<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��foreach����������</title>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px;
       	color: #f1b000;
	font-weight: bold;
}
.STYLE2 {font-size: 12px;
	color: #f1b000;
      

}
-->
</style>
<body>
<table width="859" height="381" border="0" cellpadding="0" cellspacing="0" background="images/bf.jpg">
  <tr>
    <td width="225" height="100">&nbsp;</td>
    <td width="624">&nbsp;</td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="230" align="left" class="STYLE1"></td>
    <td align="center" class="STYLE1"><?php
$name = array("1"=>"���ܻ�����","2"=>"�������","3"=>"����3G�ֻ�","4"=>"��ʿ�ֱ�");
$price = array("1"=>"14998Ԫ","2"=>"2588Ԫ","3"=>"2666Ԫ","4"=>"66698Ԫ");
$counts = array("1"=>1,"2"=>1,"3"=>2,"4"=>1);
echo '<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
          <tr>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">��Ʒ����</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">�� ��</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">����</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">���</td>
 </tr>';
foreach($name as $key=>$value){ 		 //��book������ѭ�����������ֵ
     echo '<tr>
            <td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$value.'</td>
            <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$price[$key].'</td>    
            <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key].'</td>
            <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key]*$price[$key].'</td>
</tr>';
}
echo '</table>';
?></td>
    <td align="left" class="STYLE1"></td>
  </tr>
  <tr>
    <td align="left" class="STYLE1"></td>
    <td align="left" class="STYLE1"></td>
    <td align="left" class="STYLE1"></td>
  </tr>
</table>
</body>
</html>
