<?php

declare(strict_types=1);

class Area
{
    private SquareMillimeter $area;

    public function __construct(SquareMillimeter $area)
    {
        $this->area = $area;
    }

    public function multiply(Millimeter $multiplier): Millimeter
    {
        return $this->area->multiply($multiplier);
    }

    public function __toString(): string
    {
        return (string)$this->area;
    }
}
