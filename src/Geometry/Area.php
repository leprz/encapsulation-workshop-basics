<?php

declare(strict_types=1);

namespace Geometry;

use Millimeter;

class Area
{
    public function __construct(private SquareMillimeter $area)
    {
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
