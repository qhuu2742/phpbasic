<?php

namespace html;

class Table{
    public $title = '';
    public $numRows = 0;

    public function message(){
        echo "Bảng {$this->title} có {$this->numRows} cột";
    }
}

class Row {
    public $numCells = 0;
    public function message(){
        echo "Hàng có {$this->numCells} ô";
    }
}