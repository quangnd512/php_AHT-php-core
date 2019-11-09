<?php 
    function countString($string){
        $string1 = str_split( $string ); 
        $totals = array_count_values($string1); 
        arsort( $totals ); 
        return array_keys($totals)[0];
    }
    $string = "hffjkhjfghyjfjhhhffffffgdgf";
    echo countString($string);
?>