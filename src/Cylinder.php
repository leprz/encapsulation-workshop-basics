<?php

declare(strict_types=1);

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
