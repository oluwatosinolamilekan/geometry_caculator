<?php
namespace App\Service;


class GeometryCalculator
{
    public function sumAreas($objectOne, $objectTwo): float
    {
        return $objectOne->calculateSurface() + $objectTwo->calculateSurface();
    }

    public function sumDiameters($objectOne, $objectTwo): float
    {
        return $objectOne->calculateDiameter() + $objectTwo->calculateDiameter();
    }
}