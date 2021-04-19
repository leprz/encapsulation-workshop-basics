<?php

declare(strict_types=1);

class Cylinder extends Polyhedron
{
    public static function create(Millimeter $r, Millimeter $h): self
    {
        return new self(new Circle($r), $h);
    }
}
