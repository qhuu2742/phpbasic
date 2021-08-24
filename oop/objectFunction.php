<?php

class Student {
    public $name;
    public $major;
    public $gpa;

    public function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function get_name(){
        return $this->name;
    }

    function get_major(){
        return $this->major;
    }

    function get_gpa(){
        return $this->gpa;
    }

    function checkGpa(){
        if ($this->gpa >= 3.5){
            return "Bạn được học bổng!";
        }
        return "Bạn không được học bổng";
    }
}

$student1 = new Student('Hữu', 'CNTT', 4.0);
echo $student1->name;
echo $student1->checkGpa();