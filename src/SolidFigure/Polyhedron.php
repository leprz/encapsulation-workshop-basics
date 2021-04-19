<?php

declare(strict_types=1);

namespace SolidFigure;

use Shape\ShapeInterface;
use ValueObject\Length;
use ValueObject\Volume;

abstract class Polyhedron implements SolidFigureInterface
{
    private ShapeInterface $base;

    private Length $h;

    protected function __construct(ShapeInterface $base, Length $h)
    {
        $this->h = $h;
        $this->base = $base;
    }

    public function volume(): Volume
    {
        return $this->base->area()->volume($this->h);
    }
}
