<?php

declare(strict_types=1);

namespace App\Geometry\Shape\Solid;

use App\Geometry\ShapeInterface;
use App\Millimeter;

abstract class Polyhedron implements SolidFigureInterface
{
    private ShapeInterface $base;

    private Millimeter $h;

    protected function __construct(ShapeInterface $base, Millimeter $h)
    {
        $this->h = $h;
        $this->base = $base;
    }

    public function volume(): Volume
    {
        return new Volume(new CubicMillimeter($this->base->area()->multiply($this->h)));
    }
}
