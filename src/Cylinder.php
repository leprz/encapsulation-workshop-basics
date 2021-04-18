<?php

declare(strict_types=1);

class Cylinder extends Polyhedron
{
    private function __construct(private Length $r, private Length $h)
    {
    }

    public static function create(Length $r, Length $h): self
    {
        return new self($r, $h);
    }

    /**
     * @deprecated use create(Length $r, Length $h) instead
     */
    public static function createFromLength(Length $r, Length $h): self
    {
        return new self($r, $h);
    }

    public function volume(): float
    {
        return M_PI * $this->r->pow(2)->multiply($this->h)->toFloat();
    }
}
