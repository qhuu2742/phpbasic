<?php

$a = 1;

while( $a <= 5) {

    echo $a . '<br>';
    $a++;

}

//Vòng lặp while sẽ chạy miễn là điều kiện đúng ( điều kiện sẽ được kiếm tra đầu tiên, sau đó thực thi mã trong while )
//Ở ví dụ ta khai báo biến a = 1, while có điều kiện là a <= 5 thì sẽ chạy
//$a++; là biến sẽ được cộng thêm 1 giá trị sau mỗi vòng lặp, và nó sẽ dừng lại khi giá trị sai với điều kiện ban đầu

$b = 6;

do {

    echo $b .'<br>';
    $b++;
}while( $b <= 5 );

//Vòng lặp do while sẽ thực thi mã trong do trước rồi mới kiểm tra điều kiện, sau đó vòng lặp sẽ diễn ra như vòng lặp while

//for ($i = 1; $i <= 5; $i++){
//    echo $i;
//}

//Vòng lặp for lặp theo một số lần nhất định
//Syntax :
//for (init counter; test counter; increment counter) {
//  code to be executed for each iteration;
//}

$randomnumber = array(11, 21, 31, 41, 51,  611);
for ($i = 0; $i <= count($randomnumber); $i++){
    echo $randomnumber[$i] . '<br>';

}

//Foreach - vòng lặp cho mỗi phần tử trong một mảng, và nó chỉ hoạt động trên các mảng và được sử dụng để lặp qua từng
//cặp khóa, giá trị của mảng.


//syntax:
//foreach ($array as $value) {
//  code to be executed;
//}

$memory = array('Huu', 'Vinh', 'Giang');

foreach ($memory as $value){
    echo $value . '<br>';
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val<br>";
}