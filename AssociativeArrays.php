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
<form action="AssociativeArrays.php" method="post">
    Kiểm tra điểm của sinh viên: <input type="text" name="student">
    <br>
    <input type="submit">
</form>
<?php
$grades = array(
  'Huu' => '10',
  'Vinh4' => '4',
  'Giang' => '6'
); //index => value , index phải là duy nhất, k dc trùng

$grades['Huu'] = ['A']; //như mảng bình thường, có thể sửa trc khi echo

echo $grades[$_POST['student']];

?>
</body>
</html>