<?php

declare(strict_types=1);

namespace Geometry\Shape\Solid;

interface SolidFigureInterface
{
    public function volume(): Volume;
}
