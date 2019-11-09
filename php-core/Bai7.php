<?php
    function countString($String) {
        $a = substr_count($String, 'a');
        $b = substr_count($String, 'e');
        $c = substr_count($String, 'i');
        $d = substr_count($String, 'o');
        $e = substr_count($String, 'u');
        return $total = $a+$b+$c+$d+$e;
    }
    $String1 = "Toi hoc lap trinh tai aht";
    echo countString($String1);
?>