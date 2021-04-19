<?php

declare(strict_types=1);

class Rectangle implements ShapeInterface
{
    private Millimeter $a;

    private Millimeter $b;

    public function __construct(Millimeter $a, Millimeter $b)
    {
        $this->b = $b;
        $this->a = $a;
    }

    public function area(): Area
    {
        return new Area(new SquareMillimeter($this->a->multiply($this->b)));
    }
}
