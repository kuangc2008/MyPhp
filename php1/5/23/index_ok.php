<?php 
if((strlen($_POST['IDcard'])<>15)&&(strlen($_POST['IDcard'])<>18)){						 //����û����֤�ŵĳ����Ƿ���ȷ
	echo "<script>alert('�û����֤�ű�׼����Ϊ15λ��18λ!'); history.back();</script>";
}
else{
	echo "�û���Ϣ����Ϸ���";
}
?>
