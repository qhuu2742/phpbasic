<?php

// Namespaces giải quyết 2 vấn đề sau:
// 1. Cho phép tổ chức tốt hơn bằng cách nhóm các class làm việc cùng nhau để thực hiện một nhiệm vụ.
// 2. Cho phép sử dụng một tên cho nhiều class.

//namespace html;
use html as t;
include "html.php";

$table = new t\Table(); // sử dụng class từ bên html.php
$row = new t\Row();
$table->numRows = 5;

$row = new t\Row();
$row->numCells = 3;

?>

<?php

$table->message();

$row->message();

?>
