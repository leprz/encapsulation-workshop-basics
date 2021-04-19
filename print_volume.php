<?php

declare(strict_types=1);

function print_volume(SolidFigureInterface ...$figures): void
{
    foreach ($figures as $figure) {
        echo $figure->volume() . "\n";
    }
}
