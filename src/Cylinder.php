<?php

declare(strict_types=1);

class Cylinder
{
    public function __construct(private float $r, private float $h)
    {
    }

    public function getR(): float
    {
        return $this->r;
    }

    public function getH(): float
    {
        return $this->h;
    }
}
