<?php 
    function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);
        if(strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $nextThree = substr($phoneNumber, 3, 3);
            $lastFour = substr($phoneNumber, 6, 4);
            $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
            return $phoneNumber;
        }
        else if(strlen($phoneNumber) !=10) {
            echo "Day khong phai la so dien thoai. Vui long nhap 10 so";
        }
    }
    $phoneNumber= '7654321567';
    echo formatPhoneNumber($phoneNumber);
?>
