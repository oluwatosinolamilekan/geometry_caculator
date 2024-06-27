<?php
namespace App\Entity;

class Triangle
{
    public function __construct(
        private float $a,
        private float $b,
        private float $c
    ) {}

    
    public function getA(): float
    {
        return $this->a;
    }

    public function setA(float $a): self
    {
        $this->a = $a;
        return $this;
    }

    public function getB(): float
    {
        return $this->b;
    }

    public function setB(float $b): self
    {
        $this->b = $b;
        return $this;
    }

    public function getC(): float
    {
        return $this->c;
    }

    public function setC(float $c): self
    {
        $this->c = $c;
        return $this;
    }

    public function calculateSurface(): float
    {
        $s = ($this->a + $this->b + $this->c) / 2;
        $surface = sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
        return round($surface, 2); 
    }

    public function calculateDiameter(): float
    {
        return $this->a + $this->b + $this->c;
    }
    
}