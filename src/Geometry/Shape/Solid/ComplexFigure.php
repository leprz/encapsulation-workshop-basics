<?php

declare(strict_types=1);

namespace Geometry\Shape\Solid;

class ComplexFigure implements SolidFigureInterface
{
    /** @var \Geometry\Shape\Solid\SolidFigureInterface[] */
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
            static fn(Volume $carry, SolidFigureInterface $figure) => $figure->volume()->add($carry),
            Volume::empty()
        );
    }
}
