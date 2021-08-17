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
//PHP String Functions

//trả về độ dài của một chuỗi
echo strlen('hôm nay tôi buồn!');

//đếm từ trong chuỗi
echo str_word_count('hôm nay tôi buồn!');

//đảo ngược chuỗi
echo strrev('1 2 3');

//tìm văn bản trong chuỗi, trả về vị trí kết quả phù hợp đầu tiên, như ở ví dụ dưới sẽ trả về 10
echo strpos('Hello iam Huu', 'Huu');

//thay thế văn bản trong một chuỗi
echo str_replace('Chao', 'Huu','hello Chao');



?>
</body>
</html>
