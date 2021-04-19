<?php

declare(strict_types=1);

namespace ValueObject\Unit;

use InvalidArgumentException;
use ValueObject\Length;

class SquareMillimeter
{
    private int $squareMillimeters;

    public function __construct(int $squareMillimeters)
    {
        $this->squareMillimeters = $squareMillimeters;
        self::assertGreaterThanZero($this->squareMillimeters);
    }

    private static function assertGreaterThanZero(int $squareMillimeters): void
    {
        if ($squareMillimeters < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function multiply(Length $length): CubicMillimeter
    {
        return new CubicMillimeter($this->squareMillimeters * $length->multiplySqareMillimeters());
    }

    public function multiplyByValue(float $value): self
    {
        return new self((int)round($this->squareMillimeters * $value));
    }

    public function __toString(): string
    {
        return $this->squareMillimeters . 'mm²';
    }
}
