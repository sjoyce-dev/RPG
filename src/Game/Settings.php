<?php
declare(strict_types=1);

namespace RPG\Game;

use RPG\Game\Enums\CharacterClass;

enum GameSettings: string
{
    // Game title
    case GAME_TITLE = 'RPG Game Title';
}

final class Settings
{
    public static function displayErrors(): bool
    {
        ini_set('display_errors', 1); 
        ini_set('display_startup_errors', 1); 
        error_reporting(E_ALL);
        return true;
    }
    
    public static function getGameTitle(): string
    {
        return GameSettings::GAME_TITLE->value ?? 'RPG Game';
    }

    public static function classBarbarian(): array
    {
        return CharacterClass::BARBARIAN->baseStats()->toArray();
    }

    public static function classWarlock(): array
    {
        return CharacterClass::WARLOCK->baseStats()->toArray();
    }
}