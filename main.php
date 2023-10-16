<?php
namespace App;
use App\Factory\ArtFurnitureFactory;
use App\Factory\ModernFurnitureFactory;
use App\Factory\VictorianFurnitureFactory;
require_once('./vendor/autoload.php');

//create ArtFurnitureFactory
$artFurnitureFactory = new ArtFurnitureFactory();

//create ModernFurnitureFactory
$modernFurnitureFactory  = new ModernFurnitureFactory();

//create VictorianFurnitureFactory
$victorianFurnitureFactory = new VictorianFurnitureFactory();

//full basket store from one custome
//  1 art coffeTable, 3 art sofa, 2 vactorian table, 1 modern sofa

// art coffeTable 1
$artCoffeTable_1  = $artFurnitureFactory->createCoffeTable();

// art sofa 3
$artSofa_1 = $artFurnitureFactory->createSofa();
$artSofa_2 = $artFurnitureFactory->createSofa();
$artSofa_3 = $artFurnitureFactory->createSofa();

// vactorian table 2
$victorianTable_1 = $victorianFurnitureFactory->createChair('three',4);
$victorianTable_2 = $victorianFurnitureFactory->createChair('two',2);


// modern sofa 1
$modernSofa_1 = $modernFurnitureFactory->createSofa();

$basket = [$artCoffeTable_1,$artSofa_1,$artSofa_2,$artSofa_3,$victorianTable_1,$victorianTable_2,$modernSofa_1];

foreach($basket as $key=> $product){
    print_r($product);
}
