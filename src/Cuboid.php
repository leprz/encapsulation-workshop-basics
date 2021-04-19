<?php

declare(strict_types=1);

class Cuboid extends Polyhedron
{
    public static function create(Millimeter $a, Millimeter $b, Millimeter $h): self
    {
        return new self(new Rectangle($a, $b), $h);
    }
}
