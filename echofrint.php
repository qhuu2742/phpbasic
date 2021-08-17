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
<?php

//có hai cách để hiển thị trong PHP
// echo & print
// echo thì không có giá trị trả về, print thì có giá trị trả về là 1, có thể sử dụng trong các biểu thức
//echo có thể nhận nhiều tham số
//echo nhanh hơn print 1 chút

//câu lệnh echo có thể dùng echo hoặc echo()
$text = "Hello world";
$text2 = "hust";
$x = 1;
$y = 2;

echo $text . "<br>";
echo $x + $y . "<br>";
echo "chúng tôi học tại" . $text2 . "<br>";

//câu lệnh print có thể dùng frint hoặc print()

print "<h2>Đây là hust </h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$t = "Hello";
$t2 = "neu";
$z = 2;
$y = 3;

print $t . "<br>";
print "tôi học tại" . $t2 . "<br>";
print $z + $y;














?>
</body>
</html>