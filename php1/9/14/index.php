<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Ӧ��JavaScript�ű������ı���͸�ѡ��</title>
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
.STYLE1 {
	color: #F9A825;
	font-weight: bold;
}
.STYLE2 {font-weight: bold}
-->
</style></head>
<script language="javascript">
function checkAll(form1,status){							//ȫѡ
	var elements = form1.getElementsByTagName('input');		//��ȡinput��ǩ
	for(var i=0; i<elements.length; i++){					//���ݱ�ǩ�ĳ���ִ��ѭ��
		if(elements[i].type == 'checkbox'){				//�ж϶�����Ԫ�ص����ͣ��������Ϊcheckbox
			if(elements[i].checked==false){				//�жϵ�checked��ֵΪfalseʱ
				elements[i].checked=true;					//Ϊchecked��ֵΪtrue
		  	}
		}
	}	
}
function switchAll(form1,status){			//��ѡ
	var elements = form1.getElementsByTagName('input');
	for(var i=0; i<elements.length; i++){
		if(elements[i].type == 'checkbox'){
			if(elements[i].checked==true){
				elements[i].checked=false;
		  	}else if(elements[i].checked==false){
				elements[i].checked=true;
			}
		}
	}	
}
function uncheckAll(form1,status){  //��ѡ
	var elements = form1.getElementsByTagName('input');		//��ȡinput��ǩ
	for(var i=0; i<elements.length; i++){					//���ݱ�ǩ�ĳ���ִ��ѭ��
		if(elements[i].type == 'checkbox'){				//�ж϶�����Ԫ�ص����ͣ��������Ϊcheckbox
			if(elements[i].checked==true){					//�жϵ�checked��ֵΪtrueʱ
				elements[i].checked=false;					//Ϊchecked��ֵΪfalse
		  	}
		}
	}	
}
</script>
<body>
<table width="117" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><img src="images/_02.jpg" width="1003" height="66" /></td>
  </tr>
  <tr>
    <td width="210"><img src="images/_03.jpg" width="210" height="608" /></td>
    <td width="793" height="608" align="center" valign="top" background="images/_04.jpg"><table width="700" border="0" align="center">
        <tr>
          <td>&nbsp;</td>
          <td height="50">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><form method="post" name="form1" id="form1" action="">
              <table width="547" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FBA720">
                <tr>
                  <td height="35" colspan="5" align="center" bgcolor="#FFFFFF"><span class="STYLE1">��������</span></td>
                </tr>
                <tr>
                  <td width="77" align="right" bgcolor="#FFFFFF">˵����</td>
                  <td width="389" bgcolor="#FFFFFF"><textarea name="touser" cols="50" rows="10" id="touser"></textarea></td>
                  <td width="63" height="33" bgcolor="#FFFFFF" class="STYLE2"><a href="#" onClick="javascript:document.getElementById('touser').value='';return false;"><img src="images/_14.jpg" width="60" height="25" border="0" /></a></td>
                </tr>
                <tr>
                  <td rowspan="6" align="right" bgcolor="#FFFFFF">������</td>
                  <td height="30" colspan="2" align="left" bgcolor="#FFFFFF"><input name="PHP3" type="checkbox" id="PHP3" value="PHP" />
                    C++��̴ʵ�ȫ�ܰ�</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" bgcolor="#FFFFFF"><input name="PHP" type="checkbox" id="PHP" value="PHP" />
                    VC��̴ʵ���ʯ��</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" bgcolor="#FFFFFF"><input name="PHP4" type="checkbox" id="PHP4" value="PHP" />
                    PHP��̴ʵ������</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" bgcolor="#FFFFFF"><input name="PHP5" type="checkbox" id="PHP5" value="PHP" />
                    C#��̴ʵ��׼��</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" bgcolor="#FFFFFF"><input name="PHP6" type="checkbox" id="PHP6" value="PHP" />
                    VB��̴ʵ�ȫ�ܰ�</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" bgcolor="#FFFFFF"><input name="PHP7" type="checkbox" id="PHP7" value="PHP" />
                    ASP��̴ʵ������</td>
                </tr>
                <tr>
                  <td colspan="5" align="center" bgcolor="#FFFFFF"><img src="images/_01.jpg" onclick="checkAll(form1,status)" width="60" height="25" />&nbsp;&nbsp;<img src="images/_08.jpg" onclick="switchAll(form1,status)"  width="60" height="25" />&nbsp;&nbsp;<img src="images/_11.jpg" width="60" height="25" onclick="uncheckAll(form1,status)" /> &nbsp;&nbsp;</td>
                </tr>
              </table>
            </form></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/_05.jpg" width="1003" height="54" /></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
