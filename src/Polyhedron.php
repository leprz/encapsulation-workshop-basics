<?php

declare(strict_types=1);

abstract class Polyhedron implements SolidFigureInterface
{
    protected function __construct(protected ShapeInterface $base, private Length $h)
    {
    }

    public function volume(): float
    {
        return $this->base->area() * $this->h->toFloat();
    }
}
