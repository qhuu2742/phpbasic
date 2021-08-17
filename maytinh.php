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
<form action="maytinh.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <br>
    <input type="submit">


</form>

<?php
    echo $_GET["num1"] + $_GET["num2"];

?>

</body>
</html>