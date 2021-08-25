<?php

// Tính đóng gói là tính chất không cho phép người dùng hay đối tượng khác thay đổi dữ liệu thành viên của đối tượng
// hiện tại. Chỉ có các hàm thành viên của đối tượng đó mới có quyền thay đổi trạng thái nội tại của nó mà thôi.
// Các đối tượng khác muốn thay đổi thuộc tính thành viên của đối tượng nội tại, thì chúng cần truyền thông điệp cho đối
// tượng, và việc quyết định thay đổi hay không vẫn do đối tượng nội tại quyết định. Trong PHP việc đóng gói được thực
// hiện nhờ sử dụng các từ khoá:

// public: thuộc tính hoặc phương thức có thể truy cập mọi nơi
// private: thuộc tính hoặc phương thức chỉ có thể truy cập trong class
// protected: khác private, ngoài được sử dụng trong class thì các class con kế thừa từ nó cũng có thể sử dụng được và
// bên ngoài không thể sử dụng được.

class God {
    public $name;
    private $age;
    protected $skill;

    public function __construct($name)
    {
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$god1 = new God('God asia');
echo $god1->name;


//$god1->age = 4000;
//$god1->skill = 'Ảo ma';
