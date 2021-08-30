<?php

$path = 'test.php';
$fp = @fopen($path, 'r'); //mở file

if(!$fp){
    echo 'mở file không thành công';
} else {
    echo 'mở file thành công';
} //kiểm tra xem có mở thành công không

if (file_exists('test.php'))
{
    echo 'File tồn tại';
}