<?php
    function reverse_string(string $str)
    {
        $vowels = ['a','e','i','o','u'];
        $replacements = [];
        $chars = str_split($str);
        $replacements = array_intersect($chars, $vowels); //Tim trung khop
        $replacements = array_combine(array_keys($replacements), array_reverse($replacements));
        $chars = array_replace($chars, $replacements);
        return implode('', $chars);
    }
    $str ="lap trinh php";
    echo reverse_string($str);
?>