<?php

declare(strict_types=1);

namespace SolidFigure;

use Shape\ShapeInterface;
use ValueObject\Length;
use ValueObject\Volume;

abstract class Polyhedron implements SolidFigureInterface
{
    protected function __construct(private ShapeInterface $base, private Length $h)
    {
    }

    public function volume(): Volume
    {
        return $this->base->area()->volume($this->h);
    }
}
