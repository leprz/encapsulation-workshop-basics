<?php

declare(strict_types=1);

namespace Geometry\Shape\Solid;

use Geometry\ShapeInterface;
use Millimeter;

abstract class Polyhedron implements SolidFigureInterface
{
    protected function __construct(private ShapeInterface $base, private Millimeter $h)
    {
    }

    public function volume(): Volume
    {
        return new Volume(new CubicMillimeter($this->base->area()->multiply($this->h)));
    }
}
