<?php

declare(strict_types=1);

class Length
{
    public function __construct(private float $length)
    {
        self::assertGreaterThanZero($this->length);
    }

    protected static function assertGreaterThanZero(float $num): void
    {
        if ($num < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    public function pow(int $num): self
    {
        return new self($this->length ** $num);
    }

    public function multiply(self $length): self
    {
        return new self($this->length * $length->length);
    }

    public function toFloat(): float
    {
        return $this->length;
    }
}
