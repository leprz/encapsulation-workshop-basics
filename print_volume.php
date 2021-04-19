<?php

declare(strict_types=1);

use App\Geometry\Shape\Solid\SolidFigureInterface;

function print_volume(SolidFigureInterface ...$figures): void
{
    foreach ($figures as $figure) {
        echo $figure->volume() . "\n";
    }
}
