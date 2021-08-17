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
<form action="checkbox.php" method="post">
<!--    đặt name="fruits[]" để các giá trị cùng lưu trữ trong một mảng-->
    Apple: <input type="checkbox" name="fruits[]" value="apple">
    <br>
    Watermelon: <input type="checkbox" name="fruits[]" value="watermelon">
    <br>
    Chery: <input type="checkbox" name="fruits[]" value="chery">
    <br>
    Banana: <input type="checkbox" name="fruits[]" value="banana">
    <br>

    <input type="submit">
</form>
<?php
$fruits = $_POST['fruits'];

//echo $fruits[0];
//echo $fruits[1];
//echo $fruits[2];

if (isset($fruits)){
    echo $fruits['0'];

}
?>
</body>
</html>