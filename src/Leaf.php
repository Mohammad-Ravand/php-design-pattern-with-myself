<?php
namespace App;
use App\Contracts\ComponentInterface;

class   Leaf implements ComponentInterface{
    public function __construct(){

    }

    public function execute():void{
        echo 'executing leaf class'."\r\n";
    }
}
