<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��substr_replace()������ָ���ַ��������滻</title>
</head>

<body>
<?php
$str="�ý��յ����ڹ����������յ�˫���ر���";						//�����ַ�������
$replace="�ٱ�";													//����Ԥ�滻���ַ���``
echo substr_replace($str,$replace,26,4);   							//�滻�ַ���
?>
</body>
</html>
