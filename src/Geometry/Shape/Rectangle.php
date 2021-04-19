<?php

declare(strict_types=1);

namespace Geometry\Shape;

use Geometry\Area;
use Geometry\ShapeInterface;
use Geometry\SquareMillimeter;
use Millimeter;

class Rectangle implements ShapeInterface
{
    public function __construct(private Millimeter $a, private Millimeter $b)
    {
    }

    public function area(): Area
    {
        return new Area(new SquareMillimeter($this->a->multiply($this->b)));
    }
}
