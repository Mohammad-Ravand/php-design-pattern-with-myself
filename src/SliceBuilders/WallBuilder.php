<?php
namespace App\SliceBuilders;
class WallBuilder implements SliceBuilderInterface
{
    private string $type;
    public function __construct(string $type='default'){
        $this->type = $type;
    }

   private function makingWallBuilder(){
        echo "building wall with type {$this->type} - \r\n";
   }

    public function build(){
        $this->makingWallBuilder();
    }
  
}