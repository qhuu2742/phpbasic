<?php

// Hàm isset trong PHP được dùng để kiểm tra một biến nào đó đã được khởi tạo trong bộ nhớ của máy tính hay chưa
// nếu đã tồn tại thì trả về true, còn không thì false.

$a = 'test';

if(isset($a)){
    echo 'có tồn tại';
} else {
    echo 'không tồn tại';
}

// Khi nào dùng isset ?
// Khi code được thực thi, nếu ta có sử dụng một biến mà biến đó không tồn tại thì code sẽ dừng ngay.
// Vì vậy có những trường hợp mà ta không chắc chắn là biến đố luôn tồn tại thì trước khi sử dụng hãy kiếm tra nó.

