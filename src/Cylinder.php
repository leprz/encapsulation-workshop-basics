<?php

declare(strict_types=1);

class Cylinder extends Polyhedron
{
    private function __construct(private Length $r, private Length $h)
    {
    }

    /**
     * @deprecated please use createWithLength instead
     */
    public static function create(float $r, float $h): self
    {
        return new self(new Length($r), new Length($h));
    }

    public static function createFromLength(Length $r, Length $h): self
    {
        return new self($r, $h);
    }

    public function volume(): float
    {
        return M_PI * $this->r->pow(2)->multiply($this->h)->toFloat();
    }
}
