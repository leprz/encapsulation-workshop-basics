<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$cuboid = Cuboid::create(new Length(2), new Length(2), new Length(2));

$cuboidVolume = $cuboid->volume();

echo $cuboidVolume . "\n";

$cylinder = Cylinder::create(new Length(2), new Length(2));

$cylinderVolume = $cylinder->volume();

echo $cylinderVolume . "\n";
