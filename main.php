<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$cuboid = Cuboid::create(2, 2, 2);

$cuboidVolume = $cuboid->volume();

echo $cuboidVolume . "\n";

$cylinder = Cylinder::create(2, 2);

$cylinderVolume = $cylinder->volume();

echo $cylinderVolume . "\n";
