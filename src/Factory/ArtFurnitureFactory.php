<?php
namespace App\Factory;

use App\Products\Chair\ArtChair;
use App\Products\Chair\ChairInterface;
use App\Products\CoffeTable\ArtCoffeTable;
use App\Products\CoffeTable\CoffeTableInterface;
use App\Products\Sofa\ArtSofa;
use App\Products\Sofa\SofaInterface;

 class ArtFurnitureFactory implements FurnitureFactory
{
    public function createChair(string $name,int $legs):ChairInterface{
        return new ArtChair($name,$legs);    
    }
    public function createSofa():SofaInterface{
        return new ArtSofa();
    }
    public function createCoffeTable():CoffeTableInterface{
        return new ArtCoffeTable();
    }
}