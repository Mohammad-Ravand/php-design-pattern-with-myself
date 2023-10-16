<?php
namespace App\Products\Chair;
class VictorianChair implements ChairInterface {
    private int $legs;
    private string $name;

    public function __construct(string $name,int $legs){
        $this->legs = $legs;
        $this->name = $name;
    }

    public function show():string{
        return ("VictorianChair  => name: {$this->name} legs: {$this->legs} ");
    }
}