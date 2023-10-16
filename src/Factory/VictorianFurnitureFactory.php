<?php
namespace App\Factory;

use App\Products\Chair\ChairInterface;
use App\Products\Chair\VictorianChair;
use App\Products\CoffeTable\CoffeTableInterface;
use App\Products\CoffeTable\VictorianCoffeTable;
use App\Products\Sofa\SofaInterface;
use App\Products\Sofa\VictorianSofa;

 class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(string $name,int $legs):ChairInterface{
        return new VictorianChair($name,$legs);    
    }
    public function createSofa():SofaInterface{
        return new VictorianSofa();
    }
    public function createCoffeTable():CoffeTableInterface{
        return new VictorianCoffeTable();
    }
}