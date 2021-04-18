<?php

declare(strict_types=1);

class Area
{
    public function __construct(private SquareMillimeter $squareMillimeters)
    {
    }

    public function multiply(int $millimeters): float
    {
        return $this->squareMillimeters->multiply($millimeters)->getMillimeters();
    }
}
