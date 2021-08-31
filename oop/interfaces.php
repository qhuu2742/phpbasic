<?php

interface Animal {
    public function makeSound(); // tất cả các method trong interface đều phải là public, và method này là một method trừu tượng
}

class Cat implements Animal { // class implements interface thì phải khai báo method của interface đó
    public function makeSound()
    {
        echo "meow";
        // TODO: Implement makeSound() method.
    }
}


// Nhìn vào ví dụ trên, giả sử rằng chúng ta muốn viết một phần mềm quản lý động vật, có những hành động mà tất cả các
// loài động vật đều có thể làm, nhưng mỗi loài lại làm theo cách của riêng mình
// nên khi dùng interface,  chúng ta có thể code cho tất các các loài kể cả khi mỗi loài đều có hành động khác nhau.

class Dog implements Animal{
    public function makeSound()
    {
        echo 'Gâu';
        // TODO: Implement makeSound() method.
    }
}


$cat = new Cat();
$dog = new Dog();
$animals = array($cat, $dog);

foreach ($animals as $animal){
    $animal->makeSound();
}
