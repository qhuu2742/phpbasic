<?php

// Inheritance hay còn gọi là tính kế thừa trong OOP PHP.
// Tính kế thừa cho phép một class có thể kế thừa các thuộc tính và các phương thước từ một class khác.
// Điều này cho phép các đối tượng có thể tái sử dụng hay mở rộng các đặc tính sẵn có mà không phải tiến hành định nghĩa lại.

// Syntax:
// class classCon extends classCha
//{
//    //code
//}

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "Đây là quả {$this->name} có màu {$this->color}";
    }


}

class Mango extends Fruit{
    public function message(){
        echo 'tôi là trái cây';
        // phải gọi như này $this->>intro();
    }
}

$mango = new Mango('Xoài','Vàng');
$mango->message();
$mango->intro(); // nếu function chuyển từ public sang protectec thì gọi như này sẽ lỗi theo tính chất của protected
                 // nếu khi function đang để protected mà muốn gọi ở bên ngoài thì trong class extend phải gọi từ đó ( xem bên trên )