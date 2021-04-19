<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/print_volume.php';

$cuboid = Cuboid::create(
    a: new Millimeter(2),
    b: new Millimeter(2),
    h: new Millimeter(2)
);

$cylinder = Cylinder::create(
    r: new Millimeter(2),
    h: new Millimeter(2)
);

$complexFigure = ComplexFigure::combine(
    $cuboid,
    $cylinder
);

print_volume($cuboid, $cylinder, $complexFigure);
