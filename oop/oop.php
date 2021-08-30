<?php

class Book{
    public $title;
    public $author;
    public $pages;

    function __construct($aAuthor, $aTitle, $aPages)
    {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages; //$this đề cập đến đối tượng hiện tại và chỉ tồn tại sẵn trong methods
    }
}

$book1 = new Book('Harry', 'Huu', 300); //object
$book1->author = 'huuu'; // có thể thay đổi
echo $book1->author;

//$book1 = new Book(); khai báo kiểu này lâu hơn kiểu trên
//$book1->title = 'hh';
//$book1->author = 'hh';
//$book1->pages = 300;

class Car {
    public $brand;
    public $color;

    function set_name($brand){
        $this->brand = $brand;
    }

    function get_name(){
        return $this->brand;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

$bmw = new Car();
$bmw->set_name('BMW 2021');
$bmw->set_color('pink');

echo $bmw->get_name();
echo $bmw->get_color();

class Human{
    public $name;
    public $age;

    function __construct($name,$age) //dùng __construct thay vì gọi phương thức get_name() sẽ nhanh hơn bên trên
    {
        $this->name = $name;
        $this->age = $age;
    }

    function get_name(){
        return $this->name;
    }

    function get_age(){
        return $this->age;
    }
}

$huu = new Human('huu', 30);
echo $huu->name;
