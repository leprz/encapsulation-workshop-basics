<?php

declare(strict_types=1);

class Cylinder extends Polyhedron
{
    private function __construct(Circle $base,Length $h)
    {
        parent::__construct($base, $h);
    }

    public static function create(Length $r, Length $h): self
    {
        return new self(new Circle($r), $h);
    }
}
