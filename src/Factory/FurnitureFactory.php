<?php
namespace App\Factory;
use App\Products\Chair\ChairInterface;
use App\Products\CoffeTable\CoffeTableInterface;
use App\Products\Sofa\SofaInterface;

interface FurnitureFactory
{
  public function createChair(string $name,int $legs):ChairInterface;
  public function createSofa():SofaInterface;
  public function createCoffeTable():CoffeTableInterface;
  
}