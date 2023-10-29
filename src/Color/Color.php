<?php
namespace App\Color;

class   Color{
    private $color;

    public function setColor(string $color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}