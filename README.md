# PHP RPG Engine

Lightweight web framework for a text-based RPG, built in PHP and wired for Docker/DDEV so the stack can run anywhere consistently.

## Highlights
- Dockerized via DDEV (`.ddev/config.yaml`) with Composer autoloading and Dotenv configuration so secrets stay out of the tree.
- Bootstrap (`bootstrap/engine.php`) wires the autoloader, loads env vars, and exposes the game title plus any class data you want to render in `public/index.php`.
- `src/Game/Enums` houses the core data definitions: `CharacterClass`, `ArmorType`, `WeaponType`, and `StatType`, each encoding labels, equipment proficiencies, armor bonuses, and base stats.
- Level progression utilities live under `src/Game` (`LevelingCurve`, `QuadraticCurve`) so different classes can share or override XP curves later.
- `Settings` is the single entry point for game metadata (title, starter class stats, etc.) keeping presentation concerns separated from the rules.

## Current Class Roster
Barbarian · Wizard · Rogue · Cleric · Paladin · Ranger · Druid · Warlock · Shaman
