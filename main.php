<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$cuboid = Cuboid::create(new Length(2), new Length(2), new Length(2));
$cylinder = Cylinder::create(new Length(2), new Length(2));
$complexFigure = ComplexFigure::create($cuboid, $cylinder);

foreach ([$cuboid, $cylinder, $complexFigure] as $figure) {
    echo $figure->volume() . "\n";
}
