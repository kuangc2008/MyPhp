<?php
session_start();
header("content-type:image/png");  	  //���ô���ͼ��ĸ�ʽ
$image_width=70;                      //����ͼ�����
$image_height=18;                     //����ͼ��߶�
srand(microtime()*100000);         	  //���������������
for($i=0;$i<4;$i++){                  //ѭ�����һ��4λ�������
   $new_number.=dechex(rand(0,15));
}
$_SESSION[check_checks]=$new_number;    //����ȡ���������֤��д�뵽SESSION������     

$num_image=imagecreate($image_width,$image_height);  //����һ������
imagecolorallocate($num_image,255,255,255);     	 //���û�������ɫ
for($i=0;$i<strlen($_SESSION[check_checks]);$i++){  //ѭ����ȡSESSION�����е���֤��
   $font=mt_rand(3,5);                            	//�������������
   $x=mt_rand(1,8)+$image_width*$i/4;               //��������ַ�����λ�õ�X����
   $y=mt_rand(1,$image_height/4);                   //��������ַ�����λ�õ�Y����
   $color=imagecolorallocate($num_image,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));  	 //�����ַ�����ɫ
   imagestring($num_image,$font,$x,$y,$_SESSION[check_checks][$i],$color);				     //ˮƽ����ַ�
}
imagepng($num_image);      			//����PNG��ʽ��ͼ��
imagedestroy($num_image);  			//�ͷ�ͼ����Դ
?>