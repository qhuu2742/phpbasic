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
<form action="madlibs.php" method="get">

    Màu: <input type="text" name="color">
    <br>
    Xe: <input type="text" name="car">
    <br>
    Ai đó: <input type="text" name="someone">
    <br>
    <input type="submit">

</form>
<?php
$color = $_GET["color"]; // Lấy dữ liệu mà người dùng nhập vào ở các ô input
$car = $_GET["car"];
$someone = $_GET["someone"];

echo "Hoa hồng màu $color <br>";
echo "$car tôi màu xanh <br>";
echo "Tôi ghét $someone <br>";

?>
</body>
</html>