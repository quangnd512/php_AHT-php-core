<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" name="frm">
        <input type="text" name="text" placeholder="Nhap chuoi...">
        <input type="submit" name="sbm" value="Out">
    </form>
    <?php
        if (isset($_POST['sbm'])) {
            $data = $_POST['text'];
            $alpha = array('a'=>'b','b'=>'c','c'=>'d','d'=>'E','e'=>'f','f'=>'g','g'=>'h', 'h'=>'I','i'=>'j','j'=>'k','k'=>'l','l'=>'m','m'=>'n','n'=>'O','o'=>'p','p'=>'q','q'=>'r','r'=>'s','s'=>'t','t'=>'U','u'=>'v','v'=>'w','w'=>'x',	'x'=>'y',	'y'=>'z',	'z'=>'A');
            $newdata = strtr($data,$alpha);
            echo "Chuoi moi: <span style=\"color:red;\">$newdata</span>";
        } 
    ?>
</body>
</html>
