<?php

declare(strict_types=1);

namespace ValueObject\Unit;

class CubicMillimeter
{
    public function __construct(private int $cubicMillimeters)
    {
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
