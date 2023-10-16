<?php
namespace App\Products\Chair;
class ModernChair implements ChairInterface {
    private int $legs;
    private string $name;

    public function __construct(string $name,int $legs){
        $this->legs = $legs;
        $this->name = $name;
    }

    public function show():string{
        return ("ModernChair => name: {$this->name} legs: {$this->legs} ");
    }
}