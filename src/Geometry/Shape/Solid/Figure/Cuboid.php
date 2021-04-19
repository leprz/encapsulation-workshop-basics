<?php

declare(strict_types=1);

namespace App\Geometry\Shape\Solid\Figure;

use App\Geometry\Shape\Rectangle;
use App\Geometry\Shape\Solid\Polyhedron;
use App\Millimeter;

class Cuboid extends Polyhedron
{
    public static function create(Millimeter $a, Millimeter $b, Millimeter $h): self
    {
        return new self(new Rectangle($a, $b), $h);
    }
}
