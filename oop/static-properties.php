<?php

// Các thuộc tính tĩnh

class Demo {
    public static $x = 3;
}

echo Demo::$x;

class Pi {
    public static $value = 3.14;
    public function staticValue(): float
    {
        return self::$value;
    }
}

$pi = new Pi();
echo $pi->staticValue();

//class pi {
//    public static $value=3.14159;
//}
//
//class x extends pi {
//    public function xStatic() {
//        return parent::$value;
//    }
//}
//
//// Get value of static property directly via child class
//echo x::$value;
//
//// or get value of static property via xStatic() method
//$x = new x();
//echo $x->xStatic();

// để gọi một thuộc tính tĩnh từ một lớp con thì ta dùng parent trong lớp con

