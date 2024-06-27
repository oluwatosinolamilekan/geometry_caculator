<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Circle
{
    public function __construct(
        private float $radius
    ) {}

    public function getRadius(): float
    {
        return $this->radius;
    }

   

    public function calculateSurface(): float
    {
        $surface = pi() * pow($this->radius, 2);
        return round($surface, 2);
    }
    

    public function calculateDiameter(): float
    {
        return 2 * $this->radius;
    }
}