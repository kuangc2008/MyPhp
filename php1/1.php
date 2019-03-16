<?php
	$boo = true;
	if ($boo == true) 
		echo 'the $boo is true';
	else 
		echo 'the $boo is false';


	echo '<br>';
	$i = 'only one';
	echo "$i";
	echo "<br>";
	echo '$i';
		
	echo '<br>';
	$i = 'show line';
	echo <<<std
	zhe he shuang yinhao .  \$i content is  $i
std;
		
	echo '<br>';
	$string1 = null;
	$string3 = "aaa";
	if (is_null($string1)) 
		echo "is null";
	if (is_null($string2)) 
		echo "2 is null";
	unset($string3);
	if (is_null($string3)) {
		echo "3 is null";
	}
	
?>