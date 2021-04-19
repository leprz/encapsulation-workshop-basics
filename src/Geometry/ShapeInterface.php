<?php

declare(strict_types=1);

namespace App\Geometry;

interface ShapeInterface
{
    public function area(): Area;
}
