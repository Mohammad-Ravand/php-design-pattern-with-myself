<?php
namespace App\SliceBuilders;

 class RoofBuilder implements SliceBuilderInterface
{
  
    public string $type; 

    public function __construct(string $type='default'){
        $this->type = $type;
    }

    public function build(){
        echo "building roofBuilder \r\n";
    }
}