<?php

declare(strict_types=1);

class Millimeter
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

    public function pow(int $num): self
    {
        return new self($this->millimeters ** $num);
    }

    public function multiply(self $multiplier): self
    {
        return new self($this->millimeters * $multiplier->millimeters);
    }

    public function multiplyByFloat(float $multiplier): self
    {
        return new self((int)round($this->millimeters * $multiplier));
    }

    public function add(self $addend): self
    {
        return new self($this->millimeters + $addend->millimeters);
    }

    public function __toString(): string
    {
        return $this->millimeters . 'mm';
    }
}
