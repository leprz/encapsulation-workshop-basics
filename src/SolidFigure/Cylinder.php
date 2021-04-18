<?php

declare(strict_types=1);

namespace SolidFigure;

use Shape\Circle;
use ValueObject\Length;
use ValueObject\Volume;

class Cylinder implements SolidFigureInterface
{
    private function __construct(private Polyhedron $polyhedron)
    {
    }

    public static function create(Length $r, Length $h): self
    {
        return new self(Polyhedron::create(new Circle($r), $h));
    }

    public function volume(): Volume
    {
        return $this->polyhedron->volume();
    }
}
