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
<form action="calculator.php" method="post">
    number1: <input type="number" step="0.1" name="num1"> <br>
    op: <input type="text" name="op"><br>
    number2: <input type="number" name="num2"><br>
    <input type="submit">

</form>
<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op   = $_POST['op'];

if ( $op == '+'){
    echo $num1 + $num2;
} elseif ( $op == '-'){
    echo  $num1 - $num2;
} elseif ( $op == '*'){
    echo  $num1 * $num2;
} elseif ( $op == '/'){
    echo $num1 / $num2;
} else {
    echo 'không hợp lệ';
}

?>
</body>
</html>