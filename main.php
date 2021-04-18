<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$prism = new Cuboid(2, 2, 2);

$prismVolume = $prism->getA() * $prism->getB() * $prism->getH();

echo $prismVolume . "\n";

$cylinder = new Cylinder(2, 2);

$cylinderVolume = M_PI * ($cylinder->getR() ** 2) * $cylinder->getH();

echo $cylinderVolume . "\n";
