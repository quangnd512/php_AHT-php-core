<?php
    function stringNumber($str){
        $res = array();
        $str = preg_replace("/[^0-9]/", " ", $str);
        $str = trim(preg_replace('/\s/', ' ', $str));
        $arr = explode(' ', $str);
        for ($i = 0; $i < count($arr); $i++) {
            if (is_numeric($arr[$i])) {
                $res[] = $arr[$i];
            }
        }
        $maxNum = 0;
        foreach ($res as $value) {
            if ($value>$maxNum) {
                $maxNum = $value;
            }
        }
        return $maxNum;
    } 
    $str = 'hgfhgfh5676fjh434gcfjh90';
    echo stringNumber($str);
?>