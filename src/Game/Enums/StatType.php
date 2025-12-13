<?php
declare(strict_types=1);

namespace RPG\Game\Enums;

final class StatType
{
    public function __construct(
        public readonly int $str,
        public readonly int $dex,
        public readonly int $int,
        public readonly int $vit,
        public readonly int $wis = 0,
        public readonly int $cha = 0,
    ) {}

    public function add(self $other): self
    {
        return new self(
            $this->str + $other->str,
            $this->dex + $other->dex,
            $this->int + $other->int,
            $this->vit + $other->vit,
            $this->wis + $other->wis,
            $this->cha + $other->cha,
        );
    }

    public function multiply(int $n): self
    {
        return new self(
            $this->str * $n,
            $this->dex * $n,
            $this->int * $n,
            $this->vit * $n,
            $this->wis * $n,
            $this->cha * $n,
        );
    }

    public function toArray(): array
    {
        return [
            'str' => $this->str,
            'dex' => $this->dex,
            'int' => $this->int,
            'vit' => $this->vit,
            'wis' => $this->wis,
            'cha' => $this->cha,
        ];
    }
}