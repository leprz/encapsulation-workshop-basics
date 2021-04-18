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

    public function volume(): float
    {
        return array_reduce(
            $this->figures,
            static fn(float $carry, SolidFigureInterface $figure) => $carry + $figure->volume(),
            0
        );
    }
}
