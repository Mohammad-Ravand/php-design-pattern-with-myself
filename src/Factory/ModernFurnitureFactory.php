<?php
namespace App\Factory;

use App\Products\Chair\ChairInterface;
use App\Products\Chair\ModernChair;
use App\Products\CoffeTable\CoffeTableInterface;
use App\Products\CoffeTable\ModernCoffeTable;
use App\Products\Sofa\ModernSofa;
use App\Products\Sofa\SofaInterface;

 class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(string $name,int $legs):ChairInterface{
        return new ModernChair($name,$legs);    
    }
    public function createSofa():SofaInterface{
        return new ModernSofa();
    }
    public function createCoffeTable():CoffeTableInterface{
        return new ModernCoffeTable();
    }
}