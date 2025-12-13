<?php
declare(strict_types=1);

namespace RPG\Game;

interface LevelingCurve
{
    /** XP needed to go from $level to $level+1 */
    public function xpToNext(int $level): int;

    /** Total XP required to reach exactly $level (level 1 = 0 total XP) */
    public function totalXpForLevel(int $level): int;
}