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

//Các biến có thể lưu trữ các dữ liệu thuộc kiểu dữu liệu khác nhau và mỗi kiểu dữ liệu sẽ được sử dụng vào những việc
//khác nhau.

//Sau đây là những kiểu dữ liệu mà PHP hỗ trợ
//          String
//          Integer
//          Float ( or Double )
//          Boolean
//          Array
//          Object
//          NULL
//          Resource

//String - là một chuỗi ký tự, ví dụ "Hello thế giới"
$x = "Một chuỗi ký tự";

echo $x . "<br>";

//Integer - kiểu dữ liệu số nguyên là một số không thập phân giữa -2,147,483,648 and 2,147,483,647.
//Các quy tắc cho số nguyên:
// Một số nguyên phải có ít nhất một chữ số.
// Một số nguyên không được có dấu thập phân.
// Một số nguyên có thể là số dương hoặc số âm.
// Số nguyên có thể được chỉ định trong ký hiệu: thập phân (cơ số 10), thập lục phân (cơ số 16), bát phân (cơ số 8) hoặc ký hiệu nhị phân (cơ số 2)

$x1 = 54733;

var_dump($x1);

//Float - số thực

$x2 = 10.5;

var_dump($x2);
echo "<br>";

//Boolean - đại diện cho hai trạng thái: TRUE or FALSE

//Array - mảng, lưu trữ nhiều giá trị trong biến

$car = array("Vin", "BMW", "Lexus");

var_dump($car);
echo "<br>";


//Object - đối tượng

class Xe {
    public $mau;
    public $hang;


//khi tạo một __construct function, PHP sẽ tự động gọi hàm này khi bạn tạo một đối tượng từ class
    public function __construct($mau, $hang){
        $this->mau = $mau;
        $this->hang = $hang;

    }

    public function message (){
        return "Xe của tôi là " . $this->mau ." ". $this->hang;
    }
}

$myXe = new Xe("Đen", "Kia");
echo $myXe -> message();
echo "<br>";

//NULL - một kiểu dữ liệu đặc biệt chỉ có thể trả về giá trị NULL
//Nếu 1 biến được tạo ra mà không được gán giá trị, nó sẽ tự động trả về NULL

$y = 1;
$z = null;

var_dump($z);


//Resource - nâng cao
















?>
</body>
</html>
