<?php
namespace App;

class App{
    
    public function __construct(){
    }

    public function main(){
        $menuGroup = new MenuGroup();

        $menuGroup->addChildren(new MenuITem());
        $menuGroup->addChildren(new MenuITem());
        $menuGroup->addChildren(new MenuITem());

        echo $menuGroup->render();

    }

}