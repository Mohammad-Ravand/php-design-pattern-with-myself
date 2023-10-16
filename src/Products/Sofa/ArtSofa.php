<?php

namespace App\Products\Sofa;

 class ArtSofa implements SofaInterface
{
    public function __construct(){

    }

    public function sitOn():string{
        return 'setting on art sofa';
    }
  
}