<?php

class Movie {
    public $name;
    private $time;

    public function __construct($name, $time)
    {
        $this->name = $name;
        $this->setTime($time);
    }

    function getTime(){
        return $this->time;
    }

    function setTime($time){
        if ($time == '15h' || $time == '16h'){
            $this->time = $time;
        }else{
            $this->time = 'Không hợp lệ';
        }
    }
}

$vndc = new Movie('Về nhà đi con','15hg');

echo $vndc->getTime();