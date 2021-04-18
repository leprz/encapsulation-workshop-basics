<?php

declare(strict_types=1);

class Cuboid implements SolidFigureInterface
{
    private function __construct(private Polyhedron $polyhedron)
    {
    }

    public static function create(Length $a, Length $b, Length $h): self
    {
        return new self(Polyhedron::create(new Rectangle($a, $b), $h));
    }

    public function volume(): float
    {
        return $this->polyhedron->volume();
    }
}
