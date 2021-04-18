<?php

declare(strict_types=1);

class Area
{
    public function __construct(private int $squareMillimeters)
    {
        self::assertGreaterThanZero($this->squareMillimeters);
    }

    private static function assertGreaterThanZero(int $squareMillimeters): void
    {
        if ($squareMillimeters < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function getMillimeters(): int
    {
        return $this->squareMillimeters;
    }

    public function __toString(): string
    {
        return $this->squareMillimeters . 'mm²';
    }
}
