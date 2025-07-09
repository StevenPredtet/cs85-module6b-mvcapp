<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Workout Details for <?= htmlspecialchars($workout->day) ?></title>
</head>
<body>
    <h2>Workout for <?= htmlspecialchars($workout->day) ?></h2>
    <p>Type: <?= htmlspecialchars($workout->type) ?></p>
    <p>Duration: <?= htmlspecialchars($workout->duration) ?> minutes (<?= number_format($workout->getDurationHours(), 2) ?> hours)</p>
    <p>Notes: <?= nl2br(htmlspecialchars($workout->notes)) ?></p>
    <?php if ($workout->isRestDay()): ?>
        <strong>Rest day!.</strong>
    <?php endif; ?>
</body>
</html>