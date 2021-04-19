<?php

declare(strict_types=1);

namespace Geometry\Shape\Solid;

class Volume
{
    public function __construct(private CubicMillimeter $volume)
    {
    }

    public static function empty(): self
    {
        return new self(CubicMillimeter::empty());
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
