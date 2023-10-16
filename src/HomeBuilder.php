<?php

namespace App;

use App\SliceBuilders\DoorBuilder;
use App\SliceBuilders\RoofBuilder;
use App\SliceBuilders\WallBuilder;
use App\SliceBuilders\WindowBuilder;

class HomeBuilder implements HomeBuilderInterface{
    private $home;
    public function __construct(){
        $this->home = [];
    }

    public function buildWalls(string $type=''){
        return new WallBuilder($type);
    }
    public function buildWindows(){
        return new WindowBuilder(); 
    }
    public function buildRoofs(string $type=''){
        return new RoofBuilder($type);
    }
    
    public function buildDoors(){
       return  new DoorBuilder(); 
    }

    public function getProduct(){
        $this->home[] = $this->buildWalls();
        $this->home[] = $this->buildWindows();
        $this->home[] = $this->buildDoors();
        $this->home[] = $this->buildRoofs();

        return $this->home;
    }
}