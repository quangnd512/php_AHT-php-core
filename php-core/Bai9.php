<?php
    function reverseStr($str){
        $a = array_reverse($str);
        $b = implode(' ',$a);
        return $b;    
    }
    $str1 = array('1','2','3','4');
    $str2 = array('a','b','c','d');
    $str3 = array();
    $str3 = $str1;
    $str1 = $str2;
    $str2 = $str3;
    echo reverseStr($str1);
    echo "<br>";
    echo reverseStr($str2);
?>