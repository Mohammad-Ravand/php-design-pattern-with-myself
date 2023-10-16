<?php
namespace App;
interface HomeBuilderInterface
{
    public function buildWalls(string $type='');
    public function buildWindows();
    public function buildRoofs(string $type='');
    
    public function buildDoors();
}