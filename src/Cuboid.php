<?php

declare(strict_types=1);

class Cuboid extends Solid
{
    public function __construct(private float $a, private float $b, private float $h)
    {
        self::assertGreaterThanZero($a);
        self::assertGreaterThanZero($b);
        self::assertGreaterThanZero($h);
    }

    public function volume(): float
    {
        return $this->a * $this->b * $this->h;
    }
}
