<?php
namespace App;
use App\Contracts\MenuInterface;


class MenuGroup implements MenuInterface{
    private $menuItems;
    public function __construct(){
        $this->menuItems = [];
    }

    public function addChildren(MenuInterface $item)
    {
        array_push($this->menuItems, $item);
    }
    
    public function render()
    {    
       foreach ($this->menuItems as $key => $item) {
        $item->render();
       }
    }
    
    public function getItems()
    {
        return $this->menuItems;
    }
}