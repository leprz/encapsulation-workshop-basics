<?php

declare(strict_types=1);

namespace Geometry\Shape\Solid\Figure;

use Geometry\Shape\Circle;
use Geometry\Shape\Solid\Polyhedron;
use Millimeter;

class Cylinder extends Polyhedron
{
    public static function create(Millimeter $r, Millimeter $h): self
    {
        return new self(new Circle($r), $h);
    }
}
