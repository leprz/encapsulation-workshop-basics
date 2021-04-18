<?php

declare(strict_types=1);

class Cuboid extends Polyhedron
{
    private function __construct(private Length $a, private Length $b, private Length $h)
    {
    }

    public static function create(Length $a, Length $b, Length $h): self
    {
        return new self($a, $b, $h);
    }

    public function volume(): float
    {
        return $this->a->multiply($this->b)->multiply($this->h)->toFloat();
    }
}
