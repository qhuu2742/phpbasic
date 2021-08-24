<?php

// Nói lại về hai hàm cơ bản trong PHP
// __construct() cho phép người dùng khởi tạo các thuộc tính của một đối tượng khi tạo đối tượng.
// Nếu tạo __construct() hàm, PHP tự động gọi hàm này khi tạo một đối tượng từ một lớp.

//__destruct() Một trình hủy được gọi khi đối tượng bị hủy hoặc tập lệnh bị dừng hoặc thoát.

class Vie {

    public $name;
    public $brand;

    public function __construct($name)
    {
        $this->name = $name;

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Cái xe này tên là {$this->name}";
    }
}

$bmw = new Vie('BMW 2020');