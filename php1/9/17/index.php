<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��JavaScript�ű����������ַ����ĳ���</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>
<script language="javascript">
function checkstr(str,digit){ 					//����checkstr����ʵ�ֶ��û������ȵ�����   
	var n=0; 								//�������n,��ʼֵΪ0
	for(i=0;i<str.length;i++){					//Ӧ��forѭ�����,��ȡ���ύ�û����ַ����ĳ���
		var leg=str.charCodeAt(i); 			//��ȡ�ַ���ASCII��ֵ
		if(leg>255){ 						//�ж�������ȴ���255
		   	n+=2; 						//���ʾ�Ǻ���Ϊ2���ֽ�
		}else {
			n+=1; 						//�����ʾ��Ӣ���ַ�,Ϊ1���ֽ�
		}
	}
	if (n>digit){ 							//�ж��û������ܳ����������ָ������,�򷵻�true
		return true;
	}else {
		return false; 						//����û������ܳ��Ȳ�����ָ�����ȣ��򷵻�false
	}	 	 
}	
</script>
<script language="javascript">
function checkname(){					//����checkname����,�Ա����ύ�����ݽ����ж�
	var name=form1.username.value; 
	if(name==""){						//���username��ֵΪ��
		alert("�û�������Ϊ��");			//�����"�������û���!"
		form1.username.focus();			//���ص��ñ�
	}
else{
		if(checkstr(name,20)){ 			//Ӧ��checkstr�����жϱ����ύ���û����ĳ����Ƿ����
			alert("�û������Ȳ��ܳ���20���ֽڣ����������룡");
			form1.username.focus();
		}
	}	
}		
</script>

<body> 
<table width="393" border="1" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF3399"> 
  <form name="form1" method="post" action=""> 
    <tr align="center" bgcolor="#FF99CC"> 
      <td height="24" colspan="2"><span class="style1">�û�ע��</span></td> 
    </tr> 
    <tr bgcolor="#FF99CC"> 
      <td width="64" height="24" align="center" class="style1">�û���:</td> 
      <td width="312" height="24"><input name="username" type="text" id="username" size="20" maxlength="50"> 
        <span class="style2">&nbsp;*&nbsp;�û������ܳ���20���ֽ�</span></td> 
    </tr> 
    <tr bgcolor="#FF99CC"> 
      <td height="24" align="center" class="style1">��&nbsp;&nbsp;��:</td> 
      <td height="24"><input name="password" type="password" id="password" size="20" maxlength="50"></td> 
    </tr> 
    <tr bgcolor="#FF99CC"> 
      <td height="24" colspan="2" align="center"><input type="submit" name="Submit" value="ע ��" onClick="checkname();"></td> 
    </tr> 
  </form> 
</table> 
</body>
</html>
