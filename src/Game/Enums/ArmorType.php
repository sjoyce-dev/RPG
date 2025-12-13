<?php
declare(strict_types=1);

namespace RPG\Game\Enums;

enum ArmorType: string
{
    case CLOTH = 'cloth';
    case LEATHER = 'leather';
    case MAIL = 'mail';
    case PLATE = 'plate';

    public function defenseBonus(): int
    {
        return match ($this) {
            self::CLOTH => 1,
            self::LEATHER => 3,
            self::MAIL => 5,
            self::PLATE => 7,
        };
    }
}