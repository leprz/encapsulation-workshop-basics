<?php

declare(strict_types=1);

namespace ValueObject;

use InvalidArgumentException;
use ValueObject\Unit\SquareMillimeter;

class Length
{
    private int $millimeters;

    public function __construct(int $millimeters)
    {
        $this->millimeters = $millimeters;
        self::assertGreaterThanZero($this->millimeters);
    }

    private static function assertGreaterThanZero(int $num): void
    {
        if ($num < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function pow(int $num): SquareMillimeter
    {
        return new SquareMillimeter($this->millimeters ** $num);
    }

    public function multiply(self $length): SquareMillimeter
    {
        return new SquareMillimeter($this->millimeters * $length->millimeters);
    }

    public function toMillimeters(): int
    {
        return $this->millimeters;
    }
}
