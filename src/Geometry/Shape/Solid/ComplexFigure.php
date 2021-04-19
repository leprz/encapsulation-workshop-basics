<?php

declare(strict_types=1);

namespace App\Geometry\Shape\Solid;

class ComplexFigure implements SolidFigureInterface
{
    /** @var \App\Geometry\Shape\Solid\SolidFigureInterface[] */
    private array $figures;

    private function __construct(SolidFigureInterface ...$figures)
    {
        $this->figures = $figures;
    }

    public static function combine(SolidFigureInterface ...$figures): self
    {
        return new self(...$figures);
    }

    public function volume(): Volume
    {
        return array_reduce(
            $this->figures,
            static function(Volume $carry, SolidFigureInterface $figure): Volume {
                return $figure->volume()->add($carry);
            },
            Volume::empty()
        );
    }
}
