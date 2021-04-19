<?php

declare(strict_types=1);

namespace Shape;

use ValueObject\Area;
use ValueObject\Length;

class Circle implements ShapeInterface
{
    private Length $r;

    public function __construct(Length $r)
    {
        $this->r = $r;
    }

    public function area(): Area
    {
        return new Area(
            $this->r->pow(2)->multiplyByValue(M_PI)
        );
    }
}
