<?php
namespace App\Order;

class Order {
    private array $products;

    private string $code;
    public function __construct()
    {
        $this->code = uniqid();
        $this->products = [];
    }

    public function getProducts(): array{
        reutrn $this->products;
    }

    public function setProduct($product){
        $this->products[] = $product;
    }


}