<?php

declare(strict_types=1);

abstract class Solid
{
    protected static function assertGreaterThanZero(float $num): void
    {
        if ($num < 0) {
            throw new InvalidArgumentException('Parameter must be greater than 0.');
        }
    }

    abstract public function volume(): float;
}
