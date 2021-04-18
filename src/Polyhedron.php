<?php

declare(strict_types=1);

abstract class Polyhedron
{
    protected function __construct(protected ShapeInterface $base)
    {
    }

    abstract public function volume(): float;
}
