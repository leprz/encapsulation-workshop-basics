<?php

declare(strict_types=1);

class Length
{
    public function __construct(private float $millimeters)
    {
        self::assertGreaterThanZero($this->millimeters);
    }

    protected static function assertGreaterThanZero(float $num): void
    {
        if ($num < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function pow(int $num): self
    {
        return new self($this->millimeters ** $num);
    }

    public function multiply(self $length): self
    {
        return new self($this->millimeters * $length->millimeters);
    }

    public function toMillimeters(): float
    {
        return $this->millimeters;
    }
}
