<?php

function sayHi($name, $age){ //có thể khai báo nhiều biến trong một function
    echo "Hello $name, $age tuổi <br>";
}

sayHi("Huu", "6"); //gọi hàm sayHi để thực thi
sayHi("Vinh", "3");
sayHi("Giang", "5"); // có thể dùng lại nhiều lần

// return

function cube($num){
    return $num * $num * $num;
    echo "hell"; //return sẽ chấm dứt ngay function, những gì ở sau return sẽ k được thực thi

}

$result = cube(4);
echo $result;