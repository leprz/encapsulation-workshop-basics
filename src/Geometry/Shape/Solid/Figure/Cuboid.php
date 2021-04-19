<?php

declare(strict_types=1);

namespace Geometry\Shape\Solid\Figure;

use Geometry\Shape\Rectangle;
use Geometry\Shape\Solid\Polyhedron;
use Millimeter;

class Cuboid extends Polyhedron
{
    public static function create(Millimeter $a, Millimeter $b, Millimeter $h): self
    {
        return new self(new Rectangle($a, $b), $h);
    }
}
