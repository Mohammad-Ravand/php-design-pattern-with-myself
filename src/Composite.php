<?php
namespace App;

use App\Contracts\ComponentInterface;

class   Composite{
    private array $childrens;
    
    public function add(ComponentInterface $component){
        $this->childrens[] = $component;
    }

    public function remove(ComponentInterface $component){
        array_splice($this->childrens,0,1);
    }

    public function getChildren():array{
        return $this->childrens;
    }

    public function execute():void{
        foreach($this->childrens as $component){
            $component->execute();
        }
    }

}
