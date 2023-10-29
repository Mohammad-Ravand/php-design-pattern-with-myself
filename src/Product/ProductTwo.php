<?php
namespace App\Product;

class ProductTwo {

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    
}