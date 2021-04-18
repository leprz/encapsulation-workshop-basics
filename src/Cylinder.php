<?php

declare(strict_types=1);

class Cylinder extends Polyhedron
{
    private function __construct(Circle $base, private Length $h)
    {
        parent::__construct($base);
    }

    public static function create(Length $r, Length $h): self
    {
        return new self(new Circle($r), $h);
    }

    public function volume(): float
    {
        return $this->base->area() * $this->h->toFloat();
    }
}
