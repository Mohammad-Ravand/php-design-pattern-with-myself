<?php

namespace App;

use App\SliceBuilders\DoorBuilder;
use App\SliceBuilders\RoofBuilder;
use App\SliceBuilders\WallBuilder;
use App\SliceBuilders\WindowBuilder;

class ClassicHome implements HomeBuilderInterface{
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
        return new RoofBuilder();
    }
    
    public function buildDoors(){
       return  new DoorBuilder(); 
    }

    public function getProduct(){
        $this->home[] = $this->buildWalls('classic');
        $this->home[] = $this->buildWindows();
        $this->home[] = $this->buildDoors('classic');
        $this->home[] = $this->buildRoofs();

        return $this->home;
    }
}