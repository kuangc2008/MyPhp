<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʹ����һ�����̿��Ƶ���д��ʽ</title>
</head>
<body>
<?php
	$ss = 2;						//��������$ss������ֵΪ��С������
	$max = 1000;					//��������$max����ֵΪ���ķ�Χ
	$arr = array();					//����һ������$arr
	echo $max."���ڵ�����Ϊ��";
	while($ss < $max):				//�жϱ����Ƿ�������ķ�Χ��
		$boo = false;				//����һ����������$boo����ֵΪfalse
		foreach($arr as $value):		//ʹ��foreach������$arr����
			if($ss % $value == 0):	//�������$ss �ܹ�������Ԫ������
				$boo = true;		//������������ֵΪtrue
				break;				//������ǰѭ��
			endif;
		endforeach;
		if(!$boo):					//�жϱ���$booֵ
			echo $ss." ";		//���$booΪ�٣���˵����ǰ����$ssΪ�������������
			$arr[count($arr)] = $ss;//ͬʱ�浽������
		endif;
		$ss++;		  			//����$ss��1
	endwhile;						//����ѭ��
?>

</body>
</html>
