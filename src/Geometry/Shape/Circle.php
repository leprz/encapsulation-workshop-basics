<?php

declare(strict_types=1);

namespace Geometry\Shape;

use Geometry\Area;
use Geometry\ShapeInterface;
use Geometry\SquareMillimeter;
use Millimeter;

class Circle implements ShapeInterface
{
    public function __construct(private Millimeter $r)
    {
    }

    public function area(): Area
    {
        return new Area(
            new SquareMillimeter(
                $this->r->pow(2)->multiplyByFloat(M_PI)
            )
        );
    }
}
