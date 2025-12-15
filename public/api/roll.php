<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$sidesRaw = $_GET['sides'] ?? null;
$sides = is_numeric($sidesRaw) ? (int)$sidesRaw : 0;

$allowed = [4, 6, 8, 12, 20]; // add 10, 100, etc. if you want

if (!in_array($sides, $allowed, true)) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Invalid sides. Allowed: ' . implode(',', $allowed),
    ]);
    exit;
}

$roll = random_int(1, $sides);

echo json_encode([
    'sides' => $sides,
    'min' => 1,
    'max' => $sides,
    'roll' => $roll,
    'timestamp' => gmdate('c'),
]);
