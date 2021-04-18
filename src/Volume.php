<?php

declare(strict_types=1);

class Volume
{
    public function __construct(private CubicMillimeter $cubicMillimeters)
    {
    }

    public static function empty(): self
    {
        return new self(new CubicMillimeter(0));
    }

    public function add(Volume $addend): self
    {
        return new self($this->cubicMillimeters->add($addend->cubicMillimeters));
    }

    public function __toString(): string
    {
        return (string) $this->cubicMillimeters;
    }
}
