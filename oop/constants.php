<?php

// class hằng số có thể hữu ích nếu bạn cần xác định một số dữ liệu hằng số trong một lớp.
// nên đặt tên cho các hằng số bằng tất cả chữ HOA
// có thể truy cập một hằng số từ bên ngoài class bằng cách sử dụng tên class theo sau đó là toán tử phân giải phạm vi
// (::) và kế đến là tên của hằng số.

class Goodbye {
    const LEAVING_MESSAGE = 'Thanh u!';
    public function byebye(){
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();

echo Goodbye::LEAVING_MESSAGE;

// chúng ta cũng có thể truy cập một hằng số từ bên trong class bằng cách sử dụng self theo sau là (::) và kế đến là tên hằng