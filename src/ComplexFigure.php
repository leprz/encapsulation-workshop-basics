<?php

declare(strict_types=1);

class ComplexFigure
{
    /** @var \Polyhedron[] */
    private array $figures;

    private function __construct(Polyhedron ...$figures)
    {
        $this->figures = $figures;
    }

    public static function create(Polyhedron ...$figures): self
    {
        return new self(...$figures);
    }

    public function volume(): float
    {
        return array_reduce(
            $this->figures,
            static fn(float $carry, Polyhedron $figure) => $carry + $figure->volume(),
            0
        );
    }
}
