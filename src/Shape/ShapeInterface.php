<?php

declare(strict_types=1);

namespace Shape;

use ValueObject\Area;

interface ShapeInterface
{
    public function area(): Area;
}
