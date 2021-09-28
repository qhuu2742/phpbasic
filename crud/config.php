<?php

const DB_SERVER = 'localhost'; // địa chỉ host, thông thường luôn là localhost
const DB_USERNAME = 'root'; // tên đăng nhập vào db
const DB_PASSWORD = ''; // password db
const DB_NAME = 'mydb'; // tên db

// Kết nối với db
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Kiểm tra kết nối
//if($mysqli === false){
//    die("ERROR: Could not connect. " . $mysqli->connect_error);
//}

