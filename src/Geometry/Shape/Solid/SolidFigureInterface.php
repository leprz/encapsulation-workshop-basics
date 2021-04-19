<?php

declare(strict_types=1);

namespace App\Geometry\Shape\Solid;

interface SolidFigureInterface
{
    public function volume(): Volume;
}
