<?php

declare(strict_types=1);

class Cuboid extends Polyhedron
{
    private function __construct(private Length $a, private Length $b, private Length $h)
    {
    }

    /**
     * @deprecated please use createWithLength instead
     */
    public static function create(float $a, float $b, float $h): self
    {
        return new self(
            new Length($a),
            new Length($b),
            new Length($h)
        );
    }

    public static function createFromLength(Length $a, Length $b, Length $h): self
    {
        return new self($a, $b, $h);
    }

    public function volume(): float
    {
        return $this->a->multiply($this->b)->multiply($this->h)->toFloat();
    }
}
