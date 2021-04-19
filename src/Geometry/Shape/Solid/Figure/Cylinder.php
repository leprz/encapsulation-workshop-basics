<?php

declare(strict_types=1);

namespace App\Geometry\Shape\Solid\Figure;

use App\Geometry\Shape\Circle;
use App\Geometry\Shape\Solid\Polyhedron;
use App\Millimeter;

class Cylinder extends Polyhedron
{
    public static function create(Millimeter $r, Millimeter $h): self
    {
        return new self(new Circle($r), $h);
    }
}
