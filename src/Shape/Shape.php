<?php
namespace App\Shape;

use App\Color\Color;

class   Shape{
    private string $type;
    private Color $color;

    public function setType(string $type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    
    public function setColor(Color $color){
        $this->color = $color;
    }
    
}