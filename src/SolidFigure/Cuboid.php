<?php

declare(strict_types=1);

namespace SolidFigure;

use Shape\Rectangle;
use ValueObject\Length;

class Cuboid extends Polyhedron
{
    public static function create(Length $a, Length $b, Length $h): self
    {
        return new self(new Rectangle($a, $b), $h);
    }
}
