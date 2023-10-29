<?php
namespace App\Product;

class ProductOne {
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

}