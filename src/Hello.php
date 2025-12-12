<?php
declare(strict_types=1);

namespace RPG;

class Hello
{
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
