<?php

declare(strict_types=1);

class Cylinder
{
    public function __construct(private float $r, private float $h)
    {
        self::assertGreaterThanZero($r);
        self::assertGreaterThanZero($h);
    }

    private static function assertGreaterThanZero(float $num): void
    {
        if ($num < 0) {
            throw new \InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function volume(): float
    {
        return M_PI * ($this->r ** 2) * $this->h;
    }
}
