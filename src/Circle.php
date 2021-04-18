<?php

declare(strict_types=1);

class Circle implements ShapeInterface
{
    public function __construct(private Length $r)
    {
    }

    public function area(): Area
    {
        return new Area(
            $this->r->pow(2)->multiplyByValue(M_PI)
        );
    }
}
