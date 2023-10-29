<?php

namespace App\Shape;

use App\Color\Color;
use App\Shape\Shape;

class   Tryingle extends Shape
{
    private Color $color;
    public function __construct()
    {
    }

    public function setColor(Color $color)
    {
        $this->color = $color;
    }
}
