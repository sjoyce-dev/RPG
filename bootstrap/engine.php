<?php
declare(strict_types=1);

use RPG\Game\Settings;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

Settings::displayErrors();      // turn off for production

$title = Settings::getGameTitle();