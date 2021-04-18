<?php

declare(strict_types=1);

namespace Shape;

use ValueObject\Area;
use ValueObject\Length;

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
