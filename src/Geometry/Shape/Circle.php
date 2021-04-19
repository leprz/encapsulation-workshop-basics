<?php

declare(strict_types=1);

namespace App\Geometry\Shape;

use App\Geometry\Area;
use App\Geometry\ShapeInterface;
use App\Geometry\SquareMillimeter;
use App\Millimeter;

class Circle implements ShapeInterface
{
    private Millimeter $r;

    public function __construct(Millimeter $r)
    {
        $this->r = $r;
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
