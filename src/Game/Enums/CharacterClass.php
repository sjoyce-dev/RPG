<?php
declare(strict_types=1);

namespace RPG\Game\Enums;

enum CharacterClass: string
{
    case BARBARIAN = 'barbarian';
    case WIZARD = 'wizard';
    case ROGUE = 'rogue';
    case CLERIC = 'cleric'; 
    case PALADIN = 'paladin';
    case RANGER = 'ranger';
    case DRUID = 'druid';
    case WARLOCK = 'warlock';
    case SHAMAN = 'shaman';

    public function label(): string
    {
        return match ($this) {
            self::BARBARIAN => 'Barbarian',
            self::WIZARD => 'Wizard',
            self::ROGUE => 'Rogue',
            self::CLERIC => 'Cleric',
            self::PALADIN => 'Paladin',
            self::RANGER => 'Ranger',
            self::DRUID => 'Druid',
            self::WARLOCK => 'Warlock',
            self::SHAMAN => 'Shaman',
        };
    }

    public function classType(): string
    {
        return match ($this) {
            self::BARBARIAN => 'Melee',
            self::WIZARD => 'Caster',
            self::ROGUE => 'Melee',
            self::CLERIC => 'Caster',
            self::PALADIN => 'Melee Caster',
            self::RANGER => 'Range Melee',
            self::DRUID => 'Melee Caster',
            self::WARLOCK => 'Caster',
            self::SHAMAN => 'Melee Caster',
        };
    }

    public function classDescription(): string
    {
        return match ($this) {
            self::BARBARIAN => 'A fierce warrior of primitive background who can enter a battle rage.',
            self::WIZARD => 'A scholarly magic-user capable of manipulating the structures of reality.',
            self::ROGUE => 'A scoundrel who uses stealth and trickery to overcome obstacles and enemies.',
            self::CLERIC => 'A priestly champion who wields divine magic in service of a higher power.',
            self::PALADIN => 'A holy knight who combines martial prowess with divine magic to protect the innocent.',
            self::RANGER => 'A skilled hunter and tracker who uses ranged weapons and nature magic to survive in the wilds.',
            self::DRUID => 'A priest of the Old Ways who wields the powers of nature and can shapeshift into animal forms.',
            self::WARLOCK => 'A wielder of dark magic who has made pacts with otherworldly beings for power.',
            self::SHAMAN => 'A spiritual guide who communes with the elemental spirits to harness their power.',
        };
    }

    public function startingLevel(): int
    {
        return 1;
    }

    public function armorType(): ArmorType
    {
        return match ($this) {
            self::BARBARIAN => ArmorType::MAIL,
            self::WIZARD => ArmorType::CLOTH,
            self::ROGUE => ArmorType::LEATHER,
            self::CLERIC => ArmorType::CLOTH,
            self::PALADIN => ArmorType::PLATE,
            self::RANGER => ArmorType::LEATHER,
            self::DRUID => ArmorType::LEATHER,
            self::WARLOCK => ArmorType::CLOTH,
            self::SHAMAN => ArmorType::MAIL,
        };
    }

    public function defenseBonus(): int
    {
        return $this->armorType()->defenseBonus();
    }

    public function weaponTypes(): array
    {
        return match ($this) {
            self::BARBARIAN => [
                WeaponType::AXE,
                WeaponType::SWORD,
                WeaponType::MACE,
            ],
            self::WIZARD => [
                WeaponType::DAGGER,
                WeaponType::STAFF,
            ],
            self::ROGUE => [
                WeaponType::DAGGER,
                WeaponType::BOW,
            ],
            self::CLERIC => [
                WeaponType::MACE,
                WeaponType::STAFF,
            ],
            self::PALADIN => [
                WeaponType::SWORD,
                WeaponType::MACE,
                WeaponType::SHIELD,
            ],
            self::RANGER => [
                WeaponType::BOW,
                WeaponType::DAGGER,
            ],
            self::DRUID => [
                WeaponType::STAFF,
                WeaponType::DAGGER,
            ],
            self::WARLOCK => [
                WeaponType::DAGGER,
                WeaponType::STAFF,
            ],
            self::SHAMAN => [
                WeaponType::MACE,
                WeaponType::STAFF,
                WeaponType::SHIELD,
            ],
        };
    }

    public function baseStats(): StatType
    {
        return match ($this) {
            self::BARBARIAN => new StatType(str: 8, dex: 4, int: 2, vit: 7),
            self::WIZARD    => new StatType(str: 2, dex: 4, int: 9, vit: 4),
            self::ROGUE     => new StatType(str: 4, dex: 8, int: 3, vit: 5),
            self::CLERIC    => new StatType(str: 5, dex: 3, int: 5, vit: 7),
            self::PALADIN   => new StatType(str: 7, dex: 3, int: 4, vit: 8),
            self::RANGER    => new StatType(str: 5, dex: 7, int: 3, vit: 5),
            self::DRUID     => new StatType(str: 4, dex: 4, int: 7, vit: 5),
            self::WARLOCK   => new StatType(str: 3, dex: 4, int: 8, vit: 4),
            self::SHAMAN    => new StatType(str: 5, dex: 3, int: 6, vit: 6),
        };
    }
}
