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
//PHP có một tập hợp các hàm toán học cho phép bạn thực hiện các nhiệm vụ toán học trên các con số

echo (pi()); //in ra số pi

// min max function - in ra giá trị nhỏ hoặc lớn nhất
echo (min(0, 1, 2, 3, 4, 5));
echo (max(0, 1, 2, 3, 4, 5));

//trả về một giá trị dương tuyệt đối
echo (abs(-4.6));

//trả về căn bậc hai của một số
echo (sqrt(64));

//làm tròn đến số nguyên gần đó

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

//in ra một số ngẫu nhiên

echo(rand());

echo (rand(10,100));

//

?>
</body>
</html>