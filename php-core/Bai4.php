<?php
	function backspace($string) {
		$arrString = str_split($string);
		foreach($arrString as $key => $value) {
		$i = 0;
			if(preg_match('/\#/', $value)) {
				$arrString[$key] = "";
				while($key > $i && $arrString[($key - $i)] == "") {
					$i++;
				}
				$arrString[($key - $i)] = "";
			}
		}
		return '"'.implode("", $arrString).'"';
	}

	$string1 = "a#####a#####d###c";
	echo backspace($string1);
?>