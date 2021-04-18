<?php

declare(strict_types=1);

class Cylinder extends Solid
{
    public function __construct(private float $r, private float $h)
    {
        self::assertGreaterThanZero($r);
        self::assertGreaterThanZero($h);
    }

    public function volume(): float
    {
        return M_PI * ($this->r ** 2) * $this->h;
    }
}
