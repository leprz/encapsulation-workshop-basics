<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$prism = new Cuboid(2, 2, 2);

$prismVolume = $prism->volume();

echo $prismVolume . "\n";

$cylinder = new Cylinder(2, 2);

$cylinderVolume = $cylinder->volume();

echo $cylinderVolume . "\n";
