<?php

declare(strict_types=1);

class Cuboid
{
    public function __construct(private float $a, private float $b, private float $h)
    {
    }

    public function volume(): float
    {
        return $this->a * $this->b * $this->h;
    }
}
