<?php

declare(strict_types=1);

class Cuboid extends Polyhedron
{
    private function __construct(Rectangle $base, Length $h)
    {
        parent::__construct($base, $h);
    }

    public static function create(Length $a, Length $b, Length $h): self
    {
        return new self(new Rectangle($a, $b), $h);
    }
}
