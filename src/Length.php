<?php

declare(strict_types=1);

class Length
{
    public function __construct(private int $millimeters)
    {
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
