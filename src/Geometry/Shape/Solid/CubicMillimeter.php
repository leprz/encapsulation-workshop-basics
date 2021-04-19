<?php

declare(strict_types=1);

namespace App\Geometry\Shape\Solid;

use App\Millimeter;

class CubicMillimeter
{
    private Millimeter $volume;

    public function __construct(Millimeter $volume)
    {
        $this->volume = $volume;
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
