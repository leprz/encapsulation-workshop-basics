<?php

declare(strict_types=1);

class Cuboid extends Polyhedron
{
    private function __construct(Rectangle $base, private Length $h)
    {
        parent::__construct($base);
    }

    public static function create(Length $a, Length $b, Length $h): self
    {
        return new self(new Rectangle($a, $b), $h);
    }

    public function volume(): float
    {
        return $this->base->area() * $this->h->toFloat();
    }
}
