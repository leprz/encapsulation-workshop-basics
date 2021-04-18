<?php

declare(strict_types=1);

namespace ValueObject;

use ValueObject\Unit\SquareMillimeter;

class Area
{
    public function __construct(private SquareMillimeter $squareMillimeters)
    {
    }

    public function volume(Length $height): Volume
    {
        return new Volume($this->squareMillimeters->multiply($height));
    }

    public function __toString(): string
    {
        return (string)$this->squareMillimeters;
    }
}
