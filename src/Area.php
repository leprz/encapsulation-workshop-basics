<?php

declare(strict_types=1);

class Area
{
    public function __construct(private float $millimeters)
    {
        self::assertGreaterThanZero($this->millimeters);
    }

    private static function assertGreaterThanZero(float $millimeters): void
    {
        if ($millimeters < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function getMillimeters(): float
    {
        return $this->millimeters;
    }

    public function __toString(): string
    {
        return $this->millimeters . 'mm';
    }
}
