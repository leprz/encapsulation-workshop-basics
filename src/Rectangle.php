<?php

declare(strict_types=1);

class Rectangle implements ShapeInterface
{
    public function __construct(private Length $a, private Length $b)
    {
    }

    public function area(): Area
    {
        return new Area(
            new SquareMillimeter(
                $this->a->multiply($this->b)->toMillimeters()
            )
        );
    }
}
