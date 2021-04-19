<?php

declare(strict_types=1);

namespace Geometry\Shape\Solid;

use Millimeter;

class CubicMillimeter
{
    public function __construct(private Millimeter $volume)
    {
    }

    public function add(self $addend): self
    {
        return new self($this->volume->add($addend->volume));
    }

    public static function empty(): self
    {
        return new self(new Millimeter(0));
    }

    public function __toString(): string
    {
        return $this->volume . '³';
    }
}
