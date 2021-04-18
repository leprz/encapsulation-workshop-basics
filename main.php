<?php

declare(strict_types=1);

use SolidFigure\ComplexFigure;
use SolidFigure\Cuboid;
use SolidFigure\Cylinder;
use ValueObject\Length;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/print_volume.php';

$cuboid = Cuboid::create(
    a: new Length(2),
    b: new Length(2),
    h: new Length(2)
);

$cylinder = Cylinder::create(
    r: new Length(2),
    h: new Length(2)
);

$complexFigure = ComplexFigure::create(
    $cuboid,
    $cylinder
);

print_volume($cuboid, $cylinder, $complexFigure);
