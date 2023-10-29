<?php
namespace App;

use App\Color\Red;
use App\Color\Blue;
use App\Shape\Tryingle;
use App\Shape\Rectangle;

class App{
    
    public function __construct(){
    }

    public function main(){

        $red = new Red();
        $blue = new Blue();

        $tryingle = new Tryingle();
        $tryingle->setColor($red);

        $rectangle = new Rectangle();
        $rectangle->setColor($blue);
    }

}