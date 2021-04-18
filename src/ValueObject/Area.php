<?php

declare(strict_types=1);

namespace ValueObject;

use ValueObject\Unit\SquareMillimeter;

class Area
{
    public function __construct(private SquareMillimeter $area)
    {
    }

    public function volume(Length $height): Volume
    {
        return new Volume($this->area->multiply($height));
    }

    public function __toString(): string
    {
        return (string)$this->area;
    }
}
