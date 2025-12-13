<?php
declare(strict_types=1);

namespace RPG\Game\Enums;

enum WeaponType: string
{
    case AXE = 'axe';
    case SWORD = 'sword';
    case MACE = 'mace';
    case DAGGER = 'dagger';
    case BOW = 'bow';
    case STAFF = 'staff';
    case SHIELD = 'shield';
}
