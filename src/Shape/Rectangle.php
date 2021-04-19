<?php

declare(strict_types=1);

namespace Shape;

use ValueObject\Area;
use ValueObject\Length;

class Rectangle implements ShapeInterface
{
    private Length $a;

    private Length $b;

    public function __construct(Length $a, Length $b)
    {
        $this->b = $b;
        $this->a = $a;
    }

    public function area(): Area
    {
        return new Area($this->a->multiply($this->b));
    }
}
