<?php

declare(strict_types=1);

class Cuboid
{
    public function __construct(private float $a, private float $b, private float $h)
    {
    }

    public function getA(): float
    {
        return $this->a;
    }

    public function getB(): float
    {
        return $this->b;
    }

    public function getH(): float
    {
        return $this->h;
    }
}
