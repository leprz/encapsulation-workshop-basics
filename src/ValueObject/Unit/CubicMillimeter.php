<?php

declare(strict_types=1);

namespace ValueObject\Unit;

use InvalidArgumentException;

class CubicMillimeter
{
    public function __construct(private int $cubicMillimeters)
    {
        self::assertGreaterThanZero($this->cubicMillimeters);
    }

    private static function assertGreaterThanZero(int $squareMillimeters): void
    {
        if ($squareMillimeters < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function add(CubicMillimeter $addend): self
    {
        return new self($this->cubicMillimeters + $addend->cubicMillimeters);
    }

    public function __toString(): string
    {
        return $this->cubicMillimeters . 'mm³';
    }
}
