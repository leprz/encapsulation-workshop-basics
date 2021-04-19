<?php

declare(strict_types=1);

namespace Geometry;

use Millimeter;

class SquareMillimeter
{
    public function __construct(private Millimeter $area)
    {
    }

    public function multiply(Millimeter $multiplier): Millimeter
    {
        return $multiplier->multiply($this->area);
    }

    public function __toString(): string
    {
        return $this->area . '²';
    }
}
