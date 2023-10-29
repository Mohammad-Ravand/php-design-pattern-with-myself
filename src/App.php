<?php
namespace App;

class App{
    
    public function __construct(){
    }

    public function run(){
        $leaf_one = new Leaf();
        $leaf_two = new Leaf();
        $leaf_three = new Leaf();

        $composite = new Composite();

        $composite->add($leaf_one);
        $composite->add($leaf_two);
        $composite->add($leaf_three);

        //get all components
        $composite->execute();
        

    }

}