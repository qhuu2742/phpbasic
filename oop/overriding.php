<?php

// Các phương thức kế thừa có thể được ghi đè bằng cách định nghĩa lại các phương thức ( sử dụng cùng 1 tên ) trong
// class con.

class Man {
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function intro(){
        echo "Thằng {$this->name} có số tuổi là {$this->age}";
    }
}

class Huu extends Man{
    public $school;

    public function __construct($name, $age, $school) //ghi đè phương thức của lớp cha
    {
        parent::__construct($name, $age); // gọi phương thức của lớp cha
//        $this->name = $name;
//        $this->age = $age; // có thể làm như này thay vì gọi như bên trên

        $this->school = $school;
    }

    public function intro()
    {
        echo "Thằng {$this->name} có số tuổi là {$this->age} và nó học trường {$this->school}";
    }
}

$huu = new Huu('Hữu', 21,'Đại học Kinh tế');
$huu->intro();

// The final keyword - đây là một từ khóa dùng để ngăn chặn việc kế thừa lớp hay ghi đè các method

final class A {
    //gì đó
}

class B extends A {
    //gì đó
} // -> nếu B kế thừa A trong trường hợp này thì sẽ bị lỗi

class C {
    final public function intro(){
        //gì đó
    }
}

class D extends C {
    public function intro(){
        //gì đó
    }
} // -> do function ở class C dùng final nên ở class D không thể ghi đè method này