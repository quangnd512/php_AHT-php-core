<?php
	$string ="123455.25";
	$arrString = explode('.', $string);
	foreach ($arrString as $key => $value) {
		if($key ==0){
			echo(number_format($value));
		}else
			echo ".".$value;
	}
?>