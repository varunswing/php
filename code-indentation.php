<?php
	$name = 'Varun';
	$age = 19;
	if (strtolower($name)=='varun'){
		if($age>=18){
			echo 'You\' re over<strong> 18</strong>.<br>';
			if (1==1) echo 'Yes, 1 is equal to 1!.';
		}else echo 'Not over 21.';
	}else echo 'You\'re not Varun!';
?>