<?php

declare(strict_types=1);

namespace SolidFigure;

use Shape\Circle;
use ValueObject\Length;

class Cylinder extends Polyhedron
{
    public static function create(Length $r, Length $h): self
    {
        return new self(new Circle($r), $h);
    }
}
