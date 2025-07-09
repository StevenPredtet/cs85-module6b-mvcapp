<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Kirby\Module6aMvcProject\Controllers\WorkoutController;

$day = $_GET['day'] ?? 'Monday';

$controller = new WorkoutController();
$controller->showWorkout($day);