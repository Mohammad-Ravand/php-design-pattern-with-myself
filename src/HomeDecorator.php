<?php

namespace App;

class HomeDecorator
{
  private HomeBuilderInterface $homeBuilder;

  public function __construct(HomeBuilderInterface $homeBuilder){
    $this->homeBuilder = $homeBuilder;
  }

  public function createHomeTypeOne(){
    //create product type one
    return 'home type one created';
  }

  public function createHomeTypeTwo(){
    // create home with type two 
    return 'home type two created';
  }
}