<?php
namespace App;
use App\Contracts\MenuInterface;

class   MenuITem implements MenuInterface{
    public function __construct(){

    }

    public function render(){
        echo "<li>menu item</li>";
    }
}

