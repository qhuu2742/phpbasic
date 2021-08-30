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
<?php include 'header.php'; ?>
<?php

$title = 'Hữu quá đz!';
$author = 'Cá';
$wordCount = 400;
include 'article-header.php';
?>
<?php

include 'tools.php';
echo $cm;
sayHi("ok");
?>
<?php include 'footer.php'; ?>
</body>
</html>

<!--Nói qua về sự khác nhau giữ include và require-->
<!--Nếu khi import một file bằng lệnh require thì nếu chương trình bị lỗi thì lập tức trình biên dịch sẽ dừng và xuất ra-->
<!--thông báo lỗi. Còn nếu sử dụng lệnh include thì đó chỉ là một cảnh báo nên chương trình vẫn chạy cho đến cuối chương-->
<!--trình.-->