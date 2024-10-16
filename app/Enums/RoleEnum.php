<?php

namespace App\Enums;

enum RoleEnum: int
{
    case ADMIN = 1;
    case MANAGER = 2;
    case SELLER = 3;
    case CLIENT = 4;

    public function name(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::MANAGER => 'Manager',
            self::SELLER => 'Seller',
            self::CLIENT => 'Client',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrator',
            self::MANAGER => 'Manager',
            self::SELLER => 'Seller',
            self::CLIENT => 'Client',
        };
    }

    public function permissions(): array
    {
        return match ($this) {
            self::ADMIN => ['admin', 'manager', 'seller', 'client'],
            self::MANAGER => ['manager', 'seller', 'client'],
            self::SELLER => ['seller', 'client'],
            self::CLIENT => ['client'],
        };
    }

    public function value(): int
    {
        return match ($this) {
            self::ADMIN => self::ADMIN->value,
            self::MANAGER => self::MANAGER->value,
            self::SELLER => self::SELLER->value,
            self::CLIENT => self::CLIENT->value,
        };
    }
}
