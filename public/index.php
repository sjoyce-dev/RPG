<?php
declare(strict_types=1);

require_once __DIR__ . '/../bootstrap/engine.php';

echo '<h1>' . htmlspecialchars($title) . '</h1>';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Dice Roller</h1>

    <label for="die">Choose a die</label> <br>
    <select id="die">
      <option value="4">d4</option>
      <option value="6" selected>d6</option>
      <option value="8">d8</option>
      <option value="12">d12</option>
      <option value="20">d20</option>
    </select>

    <button id="rollBtn" type="button" class="btn btn-primary border border-dark border-2">Roll</button>

    <section class="result">
      <h2>Result</h2>
      <i class="bi bi-dice-5-fill"></i>
      <div id="output"></div>
      <small id="meta"></small>
    </section>
  </main>
  <script src="js/dice.js"></script>
</body>
</html>