<?php

declare(strict_types=1);

class Cylinder
{
    public function __construct(private float $r, private float $h)
    {
    }

    public function volume(): float
    {
        return M_PI * ($this->r ** 2) * $this->h;
    }
}
