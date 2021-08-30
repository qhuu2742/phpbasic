<?php

// Abstract Classes - các lớp trừu tượng
// Khi class cha có một method được đặt tên, nhưng cần lớp con của nó để điền các tác vụ.
// Một class trừu tượng là một lớp có chứa ít nhất một method trừu tượng.
// Một method trừu tượng là một method được khai báo nhưng không được triển khai trong code.
//


//abstract class ParentClass
//{
//    abstract public function someMethod1();
//
//    abstract public function someMethod2($name, $color);
//
//    abstract public function someMethod3(): string;
//}

abstract class Person {
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_age(){
        return $this->age;
    }

    public function hello(){
        echo 'Hello';
        $this->intro();
    }

    abstract public function intro();
}

class Employee extends Person{

    private $role;

    public function __construct($name, $age, $role)
    {
        parent::__construct($name, $age);
        $this->role = $role;
    }

    public function get_role(){
        return $this->role;
    }

    public function intro()
    {
        // TODO: Implement intro() method.
        echo ($this->get_role() . " " . $this->get_name() . " " .
            $this->get_age());
    }
}

$huu = new Employee('Huu','49','nhân viên');
echo $huu->intro();

// Một số lưu ý về lớp trừu tượng:
// Các lớp khác khi kế thừa lớp trừu tượng sẽ phải định nghĩa các phương thức trừu tượng ấy.
// Một class chỉ có thể kế thừa 1 lớp trừu tượng.

//abstract class Database
//{
//    abstract protected function checkExistUser()
//    {
//        /*
//         * - Dùng thế này là sai bởi:
//         *   function checkExistUser là abstract function nên không code trong đó
//        */
//        echo 'check exist user';
//    }
//}
//
//abstract class Database
//{
//    abstract protected function checkExistUser();
//}
//$db = new Database();
///*
//* Khởi tạo đối tượng từ một Abstract class là sai
//*
//*/
//
//abstract class Database
//{
//    public $table; // Đúng
//    abstract public $rules; //Sai, vì thuộc tính không thể để dạng Abstract
//
//    abstract protected function checkExistUser(); //Đúng
//    abstract private function updateUser(); //Sai, Abstract function không thể private
//}
//
//abstract class Database
//{
//    public $table;
//
//    abstract protected function checkExistUser();
//}
//
//class User extends Database
//{
//    protected function checkExistUser()
//    {
//        //Tất cả các lớp kế thừa từ Abstract class đều phải định nghĩa lại các method của Abstract Class
//    }
//}