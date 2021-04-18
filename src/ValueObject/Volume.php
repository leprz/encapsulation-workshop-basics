<?php

declare(strict_types=1);

namespace ValueObject;

use ValueObject\Unit\CubicMillimeter;

class Volume
{
    public function __construct(private CubicMillimeter $volume)
    {
    }

    public static function empty(): self
    {
        return new self(new CubicMillimeter(0));
    }

    public function add(Volume $addend): self
    {
        return new self($this->volume->add($addend->volume));
    }

    public function __toString(): string
    {
        return (string)$this->volume;
    }
}
