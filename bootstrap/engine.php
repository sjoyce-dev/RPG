<?php

declare(strict_types=1);


require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$poop = $_ENV['TEST'] ?? 'Environment variable TEST is not set.';