<?php

declare(strict_types=1);

namespace App\Geometry;

use App\Millimeter;

class SquareMillimeter
{
    private Millimeter $area;

    public function __construct(Millimeter $area)
    {
        $this->area = $area;
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
