<?php

declare(strict_types=1);

class ComplexFigure implements SolidFigureInterface
{
    /** @var \SolidFigureInterface[] */
    private array $figures;

    private function __construct(SolidFigureInterface ...$figures)
    {
        $this->figures = $figures;
    }

    public static function create(SolidFigureInterface ...$figures): self
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
