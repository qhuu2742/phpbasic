<?php

class Test {
    public static function hello()
    {
        echo 'hello';
    }
}

Test::hello(); // để truy cập vào static function ta dùng tên class kèm theo (::) và tên method

class greeting {
    public static function hello(){
        echo 'hello';
    }

    public function __construct()
    {
        self::hello();
    }
}

new greeting();

// các static method cũng có thể được gọi từ các method trong các lớp khác, vì vậy static method phải là public

class greeting1 {
    public static function welcome() {
        echo "Hello World!";
    }
}

class SomeOtherClass {
    public function message() {
        greeting1::welcome();
    }
}

// để gọi một static method từ một lớp con, dùng (parent) bên trong lớp con. Ở đây, static method có thể là public hoặc protected.

class domain {
    protected static function getWebsiteName() {
        return "W3Schools.com";
    }
}

class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;