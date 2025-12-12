<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use RPG\Hello;

$hello = new Hello();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello PHP</title>
</head>
<body>
  <h1><?= htmlspecialchars($hello->greet('Nullstate'), ENT_QUOTES, 'UTF-8') ?></h1>
  <p>If you see this, Composer autoload is working 🎉</p>
</body>
</html>
