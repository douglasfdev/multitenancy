<?php

namespace App\Enums;

enum Commission: int
{
    case DEFAULT = 1;

    public function description(): string
    {
        return match ($this) {
            self::DEFAULT => 'Comiss\u00e3o padr\u00e3o',
        };
    }

    public function value(): int
    {
        return $this->value;
    }
}
