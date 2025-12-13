<?php
declare(strict_types=1);

namespace RPG\Game;

final class QuadraticCurve implements LevelingCurve
{
    public function __construct(
        private readonly int $base = 100,
        private readonly int $growth = 50,
    ) {}

    public function xpToNext(int $level): int
    {
        // XP to go from L to L+1
        // Example: base + growth * (level^2)
        return $this->base + ($this->growth * ($level * $level));
    }

    public function totalXpForLevel(int $level): int
    {
        if ($level <= 1) return 0;

        $total = 0;
        for ($l = 1; $l < $level; $l++) {
            $total += $this->xpToNext($l);
        }
        return $total;
    }
}
