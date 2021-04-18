<?php

declare(strict_types=1);

class Circle implements ShapeInterface
{
    public function __construct(private Length $r)
    {
    }

    public function area(): Area
    {
        return new Area((int) round(M_PI * $this->r->pow(2)->toMillimeters()));
    }
}
