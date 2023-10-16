<?php
namespace App\Products\Sofa;

 class ModernSofa implements SofaInterface
{
    public function __construct(){

    }

    public function sitOn():string{
        return 'setting on modern sofa';
    }
  
}