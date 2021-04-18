<?php

declare(strict_types=1);

class Polyhedron
{
    private function __construct(private ShapeInterface $base, private Length $h)
    {
    }

    public static function create(ShapeInterface $base, Length $h): self
    {
        return new self($base, $h);
    }

    public function volume(): float
    {
        return $this->base->area() * $this->h->toFloat();
    }
}
