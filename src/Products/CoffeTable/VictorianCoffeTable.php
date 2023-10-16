<?php
namespace App\Products\CoffeTable;
use App\Products\CoffeTable\CoffeTableInterface;

class VictorianCoffeTable implements CoffeTableInterface
{
  
    public function __construct(){

    }
    public function putOn():string{
      return 'putting on VictorianCoffeTable';
    }
}