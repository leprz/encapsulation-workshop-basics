<?php

declare(strict_types=1);

class Cuboid
{
    public function __construct(private float $a, private float $b, private float $h)
    {
        self::assertGreaterThanZero($a);
        self::assertGreaterThanZero($b);
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
        return $this->a * $this->b * $this->h;
    }
}
