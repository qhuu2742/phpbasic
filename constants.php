<?php
// Hằng số cũng là một biến nhưng bạn không thể thay đổi giá trị của nó
// Cách khai báo biến và hẳng khác nhau

//syntax:
//define(name, value, case-insensitive)
//case-insensitive: chỉ định liệu tên của hẳng có nên phân biệt chữ hoa hay thường không, ko báo gì thì mặc định false

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

define("HAI", "Welcome to W3Schools.com!", true);
echo hai;

//chuỗi hằng số - define function
define("dongvat", [
    "cho",
    "meo",
    "ga"
]);
echo dongvat[0];
echo dongvat[1];
echo dongvat[2];

//Hằng số toàn cục
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}

myTest();
