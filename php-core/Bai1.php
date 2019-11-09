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
            $string = $_POST['text'];
            $arrayStr = explode(' ', $string); //Cắt chuỗi thành mảng
            $lenValue = 0; //Chuoi dai nhat cua mang
            $valueMax = ''; //chuỗi rỗng
            foreach ($arrayStr as $value) {
                if (strlen($value)>$lenValue) {
                    $lenValue = strlen($value); //gán chuoi dai nhat cua mang bằng value
                    $valueMax = $value;
                }
            }
            echo "Chuoi dai nhat la: <span style=\"color:red;\">$valueMax</span>";
        }  
    ?>
</body>
</html>