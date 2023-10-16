<?php
namespace App\SliceBuilders;
class WindowBuilder implements SliceBuilderInterface
{
    public function __construct(){

    }

    private function stepOne():string{
        return 'building windows step one';
    }

    private function stepTwo():string{
        return 'building wondows step two';
    }

    public function build(){
        echo $this->stepOne()."\r\n";
        echo $this->stepTwo()."\r\n";
    }
  
}