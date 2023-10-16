<?php
namespace App\Products\Sofa;

 class VictorianSofa implements SofaInterface
{
    public function __construct(){

    }

    public function sitOn():string{
        return 'setting on victorian sofa';
    }
}