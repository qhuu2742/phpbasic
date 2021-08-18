<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="switch.php" method="post">
    Nhập điểm của bạn: <input type="text" name="point">
    <br>
    <input type="submit">
</form>

<?php
$point = $_POST['point'];

switch ($point) {
    case 'A':
        echo 'Tốt lắm';
        break;

    case 'B':
        echo 'Cũng ok';
        break;

    case 'C':
        echo 'Làm lại';
        break;

    default:
        echo 'Không hợp lệ';
}

?>
</body>
</html>