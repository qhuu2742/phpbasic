<?php
// PHP chỉ hỗ trợ kế thừa đơn, một lớp con chỉ có thể kế thừa từ một lớp cha duy nhất.

// traits sẽ giải quyết vấn đề này khi một lớp cần kế thừa nhiều lớp
// traits được sử dụng để khai báo các method có thể được sử dụng trong nhiều lớp
// các traits có thể có các method và abstract method có thể được sử dụng trong nhiều lớp và các method

trait message1 {
    public function msg(){
        echo 'Thông báo';
    }
}

trait message2 {
    public function msg2(){
        echo 'Thông báo 2';
    }
}

class Welcome{
    use message1;
}

class Welcome2{
    use message1, message2;
}

$me = new Welcome();
$me->msg();

$me2 = new Welcome2();
$me2->msg();
$me2->msg2();
