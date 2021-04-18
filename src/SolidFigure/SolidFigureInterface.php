<?php

declare(strict_types=1);

namespace SolidFigure;

use ValueObject\Volume;

interface SolidFigureInterface
{
    public function volume(): Volume;
}
