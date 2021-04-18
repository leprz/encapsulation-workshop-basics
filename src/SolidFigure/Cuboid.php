<?php

declare(strict_types=1);

namespace SolidFigure;

use Shape\Rectangle;
use ValueObject\Length;
use ValueObject\Volume;

class Cuboid implements SolidFigureInterface
{
    private function __construct(private Polyhedron $polyhedron)
    {
    }

    public static function create(Length $a, Length $b, Length $h): self
    {
        return new self(Polyhedron::create(new Rectangle($a, $b), $h));
    }

    public function volume(): Volume
    {
        return $this->polyhedron->volume();
    }
}
