<?php

declare(strict_types=1);

class Volume
{
    private CubicMillimeter $volume;

    public function __construct(CubicMillimeter $volume)
    {
        $this->volume = $volume;
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
